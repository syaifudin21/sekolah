<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Artikel;
use App\Models\Pengumuman;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $artikels = Artikel::where('status', '1')->get();
        $pengumumans = Pengumuman::where('status', 'Tampil')->get();
        return view('front.index', compact('pengumumans', 'artikels'));
    }
    public function daftar()
    {
    	$tahun = Carbon::now()->format('Y');
    	$tampil = [$tahun, $tahun-1, $tahun-2, $tahun-3, $tahun-5];
        return view('front.daftar', compact('tampil'));
    }
}
