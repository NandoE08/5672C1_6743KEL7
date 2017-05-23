<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\jenis_penginapanRequest;

use App\jenis_penginapan;

class jenis_penginapanController extends Controller{
    
    public function index(){
    	return view('jenis_penginapan.index', ['data'=>jenis_penginapan::all()]);
    }

    public function tambah() {
        return view('jenis_penginapan.save');
    }

    public function save(jenis_penginapanRequest $input){
        $jenis_penginapan = new jenis_penginapan();
        $jenis_penginapan->nama = $input->nama;
        $jenis_penginapan->keterangan = $input->keterangan;
        $jenis_penginapan->save();
        return redirect('admin/jenis_penginapan');
    }

    public function hapus($id) {
        $jenis_penginapan = jenis_penginapan::find($id);
        $informasi= $jenis_penginapan->delete();
        return redirect('admin/jenis_penginapan');
    }

    public function lihat($id) {
        $jenis_penginapan = jenis_penginapan::find($id);
        return view('jenis_penginapan.lihat')->with(array('jenis_penginapan'=>$jenis_penginapan));
    }

    public function edit($id) {
        $jenis_penginapan = jenis_penginapan::find($id);
        return view('jenis_penginapan.edit')->with(array('jenis_penginapan'=>$jenis_penginapan));
    }

    public function update($id, jenis_penginapanRequest $input) {
        $jenis_penginapan = jenis_penginapan::find($id);
        $jenis_penginapan->nama = $input->nama;
        $jenis_penginapan->keterangan = $input->keterangan;
        $jenis_penginapan->save();
        return redirect('admin/jenis_penginapan');
    }
}