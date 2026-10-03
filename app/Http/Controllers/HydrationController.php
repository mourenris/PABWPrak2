<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HydrationController extends Controller
{
    public function home()
    {
        return view('hyd.home');
    }

    public function about()
    {
        return view('hyd.about');
    }

    public function edukasi()
    {
        return view('hyd.edukasi');
    }

    public function formHitung()
    {
        return view('hyd.hitung_form');
    }

    public function prosesHitung(Request $request)
    {
        $nama = $request->input('nama');
        $berat = $request->input('berat');
        
        $kebutuhanMl = $berat * 35;
        $kebutuhanLiter = $kebutuhanMl / 1000;

        return view('hyd.hitung_hasil', compact('nama', 'berat', 'kebutuhanLiter'));
    }
}