<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //ini adalah method untuk mengangani reques url /login
    public function index()
    {
        //menampilkan halaman login yang ada di folder views/auth/login
        return view('auth.login');
    }
    // validasi form
    public function authenticate(Request $request)
    {
        $credentials = $request->validate(
            [
                //requered itu adalah validasi ketika input kosong
                'username' => 'required',
                'password' => 'required',
            ],
            [
                // ini adalah pesan jika validasi tidak terpenuhi
                'username.required' => 'Username tidak boleh kosong',
                'password.required' => 'Password tidak boleh kosong',
            ]
        );
        //kemudian jika terbukti ada validasi yang tidak terpenuhi maka halaman akan dikembalikan ke halaman pertama saat tombol login di kirim(dalam hal ini adalah halaman login) dan mengirimkan error pada validasi yang nantinya akan ditangkap @error
        //kalau username dan password terdaftar maka session akan di regenerate dan halaman akan dialihkan ke halaman base url (/)
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/pelayanan');
        }
        //kalau username atau password tidak terdaftar di database maka laravel akan mengembalkan halaman ke halaman semula sambil mengirimkan pesan session error.
        return back()->with('error', 'Username atau Password Salah');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/login');
    }
}
