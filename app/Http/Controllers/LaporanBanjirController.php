<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LaporanBanjirController extends Controller
{
    public function form()
    {
        return view('lapor_banjir.form');   
    }

    public function proses(Request $request)
    {
        $nama = $request->input('nama_pelapor');
        $lokasi = $request->input('lokasi');
        $tinggi = $request->input('tinggi_genangan');

        return view('lapor_banjir.konfirmasi', compact('nama', 'lokasi', 'tinggi'));
    }
}