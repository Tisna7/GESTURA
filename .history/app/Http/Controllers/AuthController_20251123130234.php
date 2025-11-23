<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AuthController extends Controller
{
    /**
     * Show Login / Register Page
     */
    public function showPage(Request $request)
    {
        $show = $request->query('show', 'login'); 
        return view('auth.login', compact('show'));
    }

    // ============================================================
    // REGISTER
    // ============================================================
    public function register(Request $request)
    {
        $request->validate([
            'fullName' => 'required|min:3',
            'username' => 'required|min:3',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6|regex:/[0-9]/'
        ],[
        // Pesan khusus
        'password.min'  => 'Password minimal 6 karakter.',
        'password.regex' => 'Password harus mengandung angka.',
        'email.unique' => 'Email sudah terdaftar.',
    ]);

        $user = User::create([
            'name'         => $request->fullName,
            'username'     => $request->username,
            'email'        => $request->email,
            'password'     => Hash::make($request->password),

            // Field default
            'role'         => 'user',
            'bio'          => null,
            'badge'        => null,
            'status'  => 'aktif',
            'total_point'  => 0,
            'last_login'   => null,
        ]);

        return redirect('/auth')->with('success', 'Akun berhasil dibuat! Silakan login.');
    }

    // ============================================================
    // LOGIN
    // ============================================================
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        // Coba login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]) ||
            Auth::attempt(['username' => $request->email, 'password' => $request->password])) {
            
            $user = Auth::user();
            $user->update(['last_login' => now()]);
            
            return redirect('/profile');
        }

        $user = Auth::user();
        $user->update(['last_login' => Carbon::now()]);

        return redirect('/landingpage');
    }

    // ============================================================
    // LOGIN AS GUEST (TAMBAHAN)
    // ============================================================
    public function loginGuest()
    {
        // Cari apakah sudah ada user guest
        $guest = User::where('email', 'guest@example.com')->first();

        // Jika belum ada → buat baru
        if (!$guest) {
            $guest = User::create([
                'name'        => 'Guest User',
                'username'    => 'guest_user',
                'email'       => 'guest@example.com',
                'password'    => Hash::make('guest123'), // tidak digunakan
                'role'        => 'guest',
                'status_akun' => 'aktif',
                'total_point' => 0,
            ]);
        }

        Auth::login($guest);

        // Update last login
        $guest->update(['last_login' => Carbon::now()]);

        return redirect('/profile')->with('success', 'Anda login sebagai Guest!');
    }

    // ============================================================
    // LOGOUT
    // ============================================================
    public function logout()
    {
        Auth::logout();

        return redirect('/auth')->with('success', 'Berhasil logout.');
    }

    public function showLogin()
{
    return view('user.quiz');
}
}
