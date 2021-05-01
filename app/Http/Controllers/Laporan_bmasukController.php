<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class Laporan_bmasukController extends Controller
{

    public function __constrcut()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $product = Product::all();

        return view('laporan_bmasuk', compact('user', 'product'));
    }

    public function print_bmasuk()
    {
        $product = Product::all();
        $pdf = PDF::loadview('print_laporan_bmasuk', ['laporan_bmasuk' => $product]);
        return $pdf->download('data_Laporan_Barang_Masuk.pdf');
    }
}
