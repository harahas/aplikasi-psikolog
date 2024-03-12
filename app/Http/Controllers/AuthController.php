<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Klien;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
    public function register_user(Request $request)
    {
        // rules validasi
        $rules = [
            'nama' => 'required',
            'no_hp' => 'required|unique:klien',
            'password' => 'required|confirmed|min:7',
            'password_confirmation' => 'required',


        ];
        $pesan = [
            'nama.required' => 'Nama tidak boleh kosong',
            'no_hp.required' => 'No HP tidak boleh kosong',
            'no_hp.unique' => 'No HP sudah terdaftar',
            'password.required' => 'Password tidak boleh kosong',
            'password.confirmed' => 'Password tidak sesuai',
            'password.min' => 'Password minimal 7 karakter',
            'password_confirmation.required' => 'Password tidak boleh kosong',

        ];
        $validator = Validator::make($request->all(), $rules, $pesan);
        // jika ada rules yang tidak terpenuhi
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }
        return response()->json(['success' => $request->all()]);
    }
    public function register_user2(Request $request)
    {
        // rules validasi
        $rules = [
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'pendidikan_terakhir' => 'required',
            'pekerjaan' => 'required',
            'status' => 'required',
            'agama' => 'required',
        ];
        $pesan = [
            'tgl_lahir.required' => 'Tanggal lahir tidak boleh kosong',
            'jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong',
            'pendidikan_terakhir.required' => 'Pendidikan Terakhir tidak boleh kosong',
            'pekerjaan.required' => 'Pekerjaan tidak boleh kosong',
            'status.required' => 'Status tidak boleh kosong',
            'agama.required' => 'Agama tidak boleh kosong',
        ];
        $validator = Validator::make($request->all(), $rules, $pesan);
        // jika ada rules yang tidak terpenuhi
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }
        return response()->json(['success' => $request->all()]);
    }
    public function register(Request $request)
    {
        $data = [
            'unique' => Str::orderedUuid(),
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'password' => bcrypt($request->password),
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'pekerjaan' => $request->pekerjaan,
            'status' => $request->status,
            'agama' => $request->agama,
        ];
        Klien::create($data);
        return redirect('/');
    }
    public function loginKlien(Request $request)
    {
        $credentials = $request->validate(
            [
                //requered itu adalah validasi ketika input kosong
                'no_hp' => 'required',
                'password' => 'required',
            ],
            [
                // ini adalah pesan jika validasi tidak terpenuhi
                'no_hp.required' => 'Nomor hp tidak boleh kosong',
                'password.required' => 'Password tidak boleh kosong',
            ]
        );
        $klien = new Klien;
        if ($klien->attemptAuthentication($request->no_hp, $request->password)) {
            $dataKlien = $klien->where('no_hp', $request->no_hp)->first();
            session()->put('klien', $dataKlien);
            return response()->json(['success' => 'succes']);
        } else {
            return response()->json(['errors' => 'Password atau username salah']);
        }
        //kalau username atau password tidak terdaftar di database maka laravel akan mengembalkan halaman ke halaman semula sambil mengirimkan pesan session error.
        // return back()->with('error', 'Username atau Password Salah');
    }
    public function updateProfil(Request $request)
    {
        // rules validasi
        $rules = [
            'nama' => 'required',
            'no_hp' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'pendidikan_terakhir' => 'required',
            'pekerjaan' => 'required',
            'status' => 'required',
            'agama' => 'required',
        ];
        $pesan = [
            'nama.required' => 'Nama tidak boleh kosong',
            'no_hp.required' => 'No HP tidak boleh kosong',
            'tgl_lahir.required' => 'Tanggal lahir tidak boleh kosong',
            'jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong',
            'pendidikan_terakhir.required' => 'Pendidikan Terakhir tidak boleh kosong',
            'pekerjaan.required' => 'Pekerjaan tidak boleh kosong',
            'status.required' => 'Status tidak boleh kosong',
            'agama.required' => 'Agama tidak boleh kosong',
        ];
        $validator = Validator::make($request->all(), $rules, $pesan);
        // jika ada rules yang tidak terpenuhi
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        } else {
            $data = [
                'nama' => $request->nama,
                'tgl_lahir' => $request->tgl_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'pendidikan_terakhir' => $request->pendidikan_terakhir,
                'pekerjaan' => $request->pekerjaan,
                'status' => $request->status,
                'agama' => $request->agama,
            ];
            Klien::where('unique', $request->unique)->update($data);
            return response()->json(['success' => 'Data Berhasil Di Update']);
        }
    }

    public function change_password(Request $request)
    {
        $rules = [
            'new_password' => 'required|min:7',
            'confirm_password' => 'required',
        ];
        $pesan = [
            'new_password.required' => 'Password tidak boleh kosong',
            'new_password.min' => 'Password minimal 7 karakter',
            'confirm_password.required' => 'Password tidak boleh kosong',
        ];
        $validator = Validator::make($request->all(), $rules, $pesan);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        } else {
            $data = [
                'password' => bcrypt($request->new_password)
            ];
            User::where('username', $request->username)->update($data);
            return response()->json(['success' => 'Password Berhasil Diubah!']);
        }
    }
}
