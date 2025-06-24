<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Alumno;
use App\Models\Prefecto;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login-alu');
    }

    public function showLoginAdmin()
    {
        return view('auth.login-admin');
    }

    public function showRegister()
    {
        return view('auth.register-alu');
    }

    public function loginAdmin(Request $request)
    {
        $credentials = $request->validate([
            'no_trabajador' => ['required'],
            'contrasena' => ['required'],
        ]);

        $admin = Prefecto::where('no_trabajador', $credentials['no_trabajador'])->first();

        if (!$admin) {
            return back()->withErrors([
                'no_trabajador' => 'El usuario no existe.',
            ])->withInput();
        }

        if (!Hash::check($credentials['contrasena'], $admin->contrasena)) {
            return back()->withErrors([
                'contrasena' => 'Contraseña incorrecta.',
            ])->withInput();
        }

        Auth::guard('admin')->login($admin);
        $request->session()->regenerate();

        return redirect()->intended('panel-admin');
    }

    public function loginAlu(Request $request)
    {
        $credentials = $request->validate([
            'boleta' => ['required', 'string', 'size:10'],
            'contrasena' => ['required', 'string'],
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

    public function registerAlu(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'primer_apellido' => 'required|string|max:255',
            'segundo_apellido' => 'required|string|max:255',
            'correo' => 'required|email|unique:alumno,correo',
            'contrasena' => 'required|string|min:5|confirmed',
        ]);

        $validated['contrasena'] = Hash::make($validated['contrasena']);

        $boleta = Alumno::max('boleta') + 1;
        $validated['boleta'] = $boleta;
        $validated['fecha_registro'] = now();

        $user = Alumno::create($validated);

        session()->flash('boleta_generada', $boleta);
        session()->flash('success', 'Alumno registrado correctamente.');

        return redirect()->route('show.login-alu');
    }


    public function logout(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } elseif (Auth::guard('alumno')->check()) {
            Auth::guard('alumno')->logout();
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('main');
    }
}
