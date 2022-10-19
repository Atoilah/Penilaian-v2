<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    public function index()
    {
        $cek = Jurusan::count();
        if ($cek == 0) {
            $urut = 1000;
            $nomer = $urut;
        } else {
            $ambil = Jurusan::all()->last();
            $urut = (int)substr($ambil->JurusanId, -8) + 1;
            $nomer = $urut;
        }
        return view('page.jurusan.index', [
            "title" => "Jurusan",
            "jurusan" => Jurusan::oldest()->Filter(request(['cari']))->get()
        ], compact('nomer'));
    }
}
