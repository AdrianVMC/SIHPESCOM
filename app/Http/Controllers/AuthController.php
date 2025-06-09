<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Alumno;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login-alu');
    }

    public function loginAlu(Request $request)
    {
        $credentials = $request->validate([
            'boleta' => 'required|string|size:10',
            'contrasena' => 'required|string',
        ]);

        $alumno = Alumno::where('boleta', $credentials['boleta'])->first();

        if (!$alumno) {
            return back()->withErrors([
                'boleta' => 'Boleta no registrada.',
            ])->withInput();
        }

        if (!Hash::check($credentials['contrasena'], $alumno->contrasena)) {
            return back()->withErrors([
                'contrasena' => 'Contraseña incorrecta.',
            ])->withInput();
        }

        Auth::guard('alumno')->login($alumno);

        $request->session()->regenerate();

        return redirect()->intended('panel-alu');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('show.login-alu');
    }
}
