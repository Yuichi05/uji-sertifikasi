<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departemen;
use App\Models\Pegawai;

class WebController extends Controller
{
    public function index()
    {
        //menampilkan data dari table
        $data = Pegawai::all();
        $dm = Departemen::all();
        return view('web.index',  compact('data', 'dm'));
    }
}
