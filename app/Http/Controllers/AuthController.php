<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle an authentication attempt.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            // ==========================================================
            // LOGIKA PENGALIHAN SETELAH LOGIN
            // ==========================================================
            /** @var \App\Models\User $user */
            // MENGGUNAKAN FACADE Auth::user() AGAR EDITOR KODE MENGENALINYA
            $user = Auth::user();

            // Cek apakah pengguna yang login adalah admin
            if ($user->is_admin) {
                // Jika admin, arahkan ke dashboard admin
                return redirect()->route('admin.dashboard');
            }
            
            // Jika bukan admin (pengguna biasa), arahkan ke halaman janji temu
            return redirect()->intended(route('appointment.index'));
            // ==========================================================
        }

        return back()->withErrors([
            'email' => 'Email atau password yang diberikan salah.',
        ])->onlyInput('email');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'instansi' => ['required', 'string', 'max:255'],
            'jabatan' => ['required', 'string', 'max:255'],
            'pangkat' => ['required', 'string', 'max:255'],
            'nrp_nik' => ['required', 'string', 'max:255', 'unique:'.User::class],
        ]);

        $user = User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'instansi' => $request->instansi,
            'jabatan' => $request->jabatan,
            'pangkat' => $request->pangkat,
            'nrp_nik' => $request->nrp_nik,
        ]);

        Auth::login($user);

        return redirect(route('appointment.index'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}