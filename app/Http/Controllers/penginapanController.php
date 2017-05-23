<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\penginapanRequest;

use App\jenis_penginapan;

use App\penginapan;

class penginapanController extends Controller {
    
    public function index(){
    	$allpenginapan = penginapan::all();
    	return view('penginapan.index', compact('allpenginapan'));
    }

    public function tambah() {
        $jenis_penginapan = new jenis_penginapan;
        return view('penginapan.save', compact('jenis_penginapan'));
    }

    public function save(penginapanRequest $input){
            $penginapan = new penginapan();
            $penginapan->nama_penginapan = $input->nama_penginapan;
            $penginapan->alamat = $input->alamat;
            $penginapan->fasilitas = $input->fasilitas;
            $penginapan->tarif = $input->tarif;

            // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
            $file       = $input->file('file');
            $fileName   = $file->getClientOriginalName();
            $input->file('file')->move("image/penginapan/", $fileName);

            $penginapan->file = $fileName;
            $penginapan->jenis_penginapan_id = $input->jenis_penginapan_id;
            $penginapan->save();
        return redirect('admin/penginapan');
    }

    public function hapus($id) {
        $penginapan = penginapan::find($id);
        // $image_path = public_path().'/image/penginapan/'.$penginapan->file;
        // unlink($image_path);
        $penginapan->delete();
        return redirect('admin/penginapan');
    }

    public function lihat($id) {
        $penginapan = penginapan::find($id);
        return view('penginapan.lihat')->with(array('penginapan'=>$penginapan));
    }

    public function edit($id) {
        $penginapan = penginapan::find($id);
        $jenis_penginapan = new jenis_penginapan;
        return view('penginapan.edit', compact('penginapan','jenis_penginapan'));
    }

    public function update($id, penginapanRequest $input) {
        $penginapan = penginapan::find($id);
        $penginapan->nama_penginapan = $input->nama_penginapan;
        $penginapan->alamat = $input->alamat;
        $penginapan->fasilitas = $input->fasilitas;
        $penginapan->tarif = $input->tarif;

        // $image_path = public_path().'/image/penginapan/'.$penginapan->file;
        // unlink($image_path);

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $input->file('file');
        $fileName   = $file->getClientOriginalName();
        $input->file('file')->move("image/penginapan/", $fileName);

        $penginapan->file = $fileName;
        $penginapan->jenis_penginapan_id = $input->jenis_penginapan_id;
        $penginapan->save();
        return redirect('admin/penginapan');
    }
}