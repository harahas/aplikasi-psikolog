<?php

namespace App\Http\Controllers;

use App\Models\pelayanan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
}
