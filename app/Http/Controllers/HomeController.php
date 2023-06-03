<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $biodata = [
            'title' => 'Home',
            'nameL' => 'Dwi Lutfi Taufiq Ihsani',
            'nameP' => 'Lutfi',
            'alamat' => 'Trenggalek, Buluagung karangan',
            'ttl' => 'Jayapura, 26 Februari 2000',
            'agama' => 'Islam',
            'jenisKelamin' => 'Laki-laki',
            'kewarganegaraan' => 'Indonesia',
            'status' => 'Mahasiswa',
            'hobi' => 'Nugas',
            'skill' => 'HTML,CSS,Python,PHP,JS',
            'motoHidup' => "'Cobalah untuk tidak menjadi orang sukses, tapi lebih baik coba menjadi orang yang bernilai. (Albert Einstein)'"
        ];

        $pageTitle = 'Home';

        return view('home', compact('biodata', 'pageTitle'));
    }
}
