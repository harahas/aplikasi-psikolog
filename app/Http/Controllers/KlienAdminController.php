<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KlienAdminController extends Controller
{
    //
    public function index()
    {
        $data = [
            'title' => 'Klien'
        ];
        return view('klien.index_klien', $data);
    }
}
