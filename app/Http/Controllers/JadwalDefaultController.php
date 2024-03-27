<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\JadwalDefault;
use App\Models\SettingJadwal;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class JadwalDefaultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Jadwal Default'
        ];
        return view('jadwal-default.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // rules validasi
        $rules = [
            'jam_awal' => 'required',
            'jam_akhir' => 'required',

        ];
        $pesan = [
            'jam_awal.required' => 'Jam tidak boleh kosong',
            'jam_akhir.required' => 'Jam tidak boleh kosong',

        ];
        $validator = Validator::make($request->all(), $rules, $pesan);
        // jika ada rules yang tidak terpenuhi
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        } else {
            $data = [
                'unique' => Str::orderedUuid(),
                'jam_awal' => $request->jam_awal,
                'jam_akhir' => $request->jam_akhir,

            ];
            JadwalDefault::create($data);
            return response()->json(['success' => 'Data Berhasil Di Simpan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JadwalDefault  $jadwalDefault
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalDefault $jadwalDefault)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JadwalDefault  $jadwalDefault
     * @return \Illuminate\Http\Response
     */
    public function edit(JadwalDefault $jadwalDefault)
    {
        return response()->json(['data' => $jadwalDefault]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JadwalDefault  $jadwalDefault
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JadwalDefault $jadwalDefault)
    {
        // rules validasi
        $rules = [
            'jam_awal' => 'required',
            'jam_akhir' => 'required',

        ];
        $pesan = [
            'jam_awal.required' => 'Jam tidak boleh kosong',
            'jam_akhir.required' => 'Jam tidak boleh kosong',

        ];
        $validator = Validator::make($request->all(), $rules, $pesan);
        // jika ada rules yang tidak terpenuhi
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        } else {
            $data = [
                'jam_awal' => $request->jam_awal,
                'jam_akhir' => $request->jam_akhir,

            ];
            JadwalDefault::where('unique', $jadwalDefault->unique)->update($data);
            return response()->json(['success' => 'Data Berhasil Di Ubah']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JadwalDefault  $jadwalDefault
     * @return \Illuminate\Http\Response
     */
    public function destroy(JadwalDefault $jadwalDefault)
    {
        JadwalDefault::destroy($jadwalDefault->id);
        return response()->json(['success' => "Jadwal Behasil Dihapus"]);
    }

    public function dataTables(Request $request)
    {
        $query = JadwalDefault::all();
        return DataTables::of($query)->addColumn('action', function ($row) {
            $actionBtn =
                '
                <button class="btn btn-rounded btn-sm btn-warning text-white edit-button" title="Edit Data" data-unique="' . $row->unique . '"><i class=" ri-edit-box-line">Edit</i></button>
                <button class="btn btn-rounded btn-sm btn-danger text-white delete-button" title="Hapus Data" data-unique="' . $row->unique . '" data-token="' . csrf_token() . '"><i class=" ri-delete-bin-line">Delete</i></button>';
            return $actionBtn;
        })->make(true);
    }
}
