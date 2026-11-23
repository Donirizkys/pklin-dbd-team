<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    /** Role yang sudah punya dashboard. Role lain (dudi, pembimbing) menyusul. */
    private const ROLE_AKTIF = ['admin'];

    public function show(): View|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('auth.login');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ], [
            'username.required' => 'Username wajib diisi.',
            'password.required' => 'Kata sandi wajib diisi.',
        ]);

        $ok = Auth::attempt(
            ['username' => $data['username'], 'password' => $data['password'], 'aktif' => 1],
            $request->boolean('remember')
        );

        if (! $ok) {
            return back()->withInput($request->only('username'))
                ->withErrors(['username' => 'Username atau kata sandi salah.']);
        }

        if (! in_array(Auth::user()->role, self::ROLE_AKTIF, true)) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return back()->withInput($request->only('username'))
                ->withErrors(['username' => 'Dashboard untuk akun ini belum tersedia.']);
        }

        $request->session()->regenerate();

        return redirect()->intended(route('admin.dashboard'));
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
