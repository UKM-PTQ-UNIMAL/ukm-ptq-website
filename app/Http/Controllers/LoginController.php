<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class LoginController extends Controller
{
    public $meta;

    public function __construct()
    {
        $this->meta = new stdClass();
        $this->meta->keywords = 'login ukm ptq unimal, ukm ptq unimal, ukm ptq, ukm, ptq';
        $this->meta->author = 'PUBDOK PTQ UNIMAL';
        $this->meta->description = 'Login Website Unit Kegiatan Mahasiswa Pengembangan Tilawatil Qur\'an, Universitas Malikussaleh';
        $this->meta->url = 'https://ptq.unimal.ac.id/login';
        $this->meta->type = 'login';
        $this->meta->image = 'https://ptq.unimal.ac.id/img/logo.png';
    }
    public function index()
    {
        return view('login.index', [
            'meta' => $this->meta,
            'title' => "Halaman Login Website",
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|alpha_dash|max:255',
            'password' => 'required|alpha_dash|max:255',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Username atau password salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
