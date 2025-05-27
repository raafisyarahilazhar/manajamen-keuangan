<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Laporan;

class HomeController extends Controller
{
    public function index()
    {
        $Laporan = Laporan::all();
        return view('index', [
            'laporan' => $Laporan
        ]);
    }
}
