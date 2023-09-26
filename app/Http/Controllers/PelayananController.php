<?php

namespace App\Http\Controllers;

use App\Models\pelayanan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Pelayanan',
            'query' => Pelayanan::all()

        ];
        return view('pelayanan.index', $data);
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
        $data = [
            'unique' => Str::orderedUuid(),
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tanggal' => $request->tanggal,
            'jenispelayanan' => $request->jenispelayanan,
            'status' => 'BELUM SELESAI',
            'keterangan' => $request->keterangan,
        ];

        pelayanan::create($data);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function show(pelayanan $pelayanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function edit(pelayanan $pelayanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pelayanan $pelayanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pelayanan $pelayanan)
    {
        //
    }

    public function daftar_pelayanan(Request $request)
    {
        return view('pelayanan.create');
    }

    public function dataTables(Request $request)
    {
        $query = Pelayanan::where('status', 'BELUM SELESAI')->get();
        return DataTables::of($query)->addColumn('action', function ($row) {
            $actionBtn =
                '
    <button class="btn btn-rounded btn-sm btn-primary text-white selesai-button" title="Edit Data" data-unique="' . $row->unique . '">Selesai</button>
    <a href="https://wa.me/+62' . $row->no_hp . '" class="btn btn-rounded btn-sm btn-info text-white selesai-button" title="Edit Data" data-unique="' . $row->unique . '">Hubungi</a>
    ';

            return $actionBtn;
        })->make(true);
    }
    public function dataTablesSelesai(Request $request)
    {
        $query = Pelayanan::where('status', 'SELESAI')->get();
        return DataTables::of($query)->addColumn('action', function ($row) {
            $actionBtn =
                '
    
    <a href="https://wa.me/+62' . $row->no_hp . '" class="btn btn-rounded btn-sm btn-info text-white selesai-button" title="Edit Data" data-unique="' . $row->unique . '">Hubungi</a>
    ';

            return $actionBtn;
        })->make(true);
    }

    public function ubah_status(Request $request)
    {
        //update
        Pelayanan::where('unique', $request->unique)->update(['status' => 'SELESAI']);
        return response()->json(['succes' => 'Oke']);
    }
}
