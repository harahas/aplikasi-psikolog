<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [
            'title' => 'Artikel',

        ];
        return view('artikel.list-artikel', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // untuk menambahkan data 
    public function create()
    {
        //
        $data = [
            'title' => 'Tambah Artikel',

        ];
        return view('artikel.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // proses penyimpanan data
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    // detail data
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    // edit data
    public function edit(Artikel $artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    // proses update data
    public function update(Request $request, Artikel $artikel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    // hapus data
    public function destroy(Artikel $artikel)
    {
        //
    }

    public function dataTables(Request $request)
    {
        // untuk mengambil data semua artikel dari database oleh MODEL ARTIKEL
        $query = Artikel::all();
        return DataTables::of($query)->addColumn('action', function ($row) {
            $actionBtn =
                '
    <a href="#" class="btn btn-rounded btn-sm btn-primary text-white" title="Lihat">Lihat</a>
    <a href="#" class="btn btn-rounded btn-sm btn-info text-white" title="Edit Data">Edit</a>
    <a href="#" class="btn btn-rounded btn-sm btn-danger text-white" title="Hapus">Hapus</a>
    ';

            return $actionBtn;
        })->make(true);
    }
    public function create_slug(Request $request)
    {
        $slug = SlugService::createSlug(Artikel::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
