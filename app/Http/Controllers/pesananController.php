<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\member;

use App\wisata;

use App\pesanan;

class pesananController extends Controller{
    
    public function index(){
        $allpesanan = pesanan::all();
        return view('pesanan.index', compact('allpesanan'));
    }

    public function hapus($id) {
        $pesanan = pesanan::find($id);
        $pesanan->delete();
        return redirect('admin/pesanan');
    }

    public function lihat($id) {
        $pesanan = pesanan::find($id);
        return view('pesanan.lihat')->with(array('pesanan'=>$pesanan));
    }
}