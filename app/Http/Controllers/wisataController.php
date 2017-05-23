<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\wisataRequest;

use App\transportasi;

use App\penginapan;

use App\wisata;

class wisataController extends Controller{

    public function index(){
        $allwisata = wisata::all();
        return view('wisata.index', compact('allwisata'));
    }

	public function tambah() {
        $penginapan = new penginapan;
        $transportasi = new transportasi;
        return view('wisata.save', compact('transportasi','penginapan'));
    }

    public function save(wisataRequest $input){
        $wisata = new wisata();
        $wisata->nama = $input->nama;
        $wisata->alamat = $input->alamat;
        $wisata->fasilitas = $input->fasilitas;
        $wisata->tarif = $input->tarif;

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $input->file('file');
        $fileName   = $file->getClientOriginalName();
        $input->file('file')->move("image/wisata/", $fileName);

        $wisata->file = $fileName;
        $wisata->penginapan_id = $input->penginapan_id;
        $wisata->transportasi_id = $input->transportasi_id;
        $wisata->save();

        return redirect('admin/wisata');
    }

    public function hapus($id) {
        $wisata = wisata::find($id);
        // $image_path = public_path().'/image/wisata/'.$wisata->file;
        // unlink($image_path);
        $wisata->delete();
        return redirect('admin/wisata');
    }

    public function lihat($id) {
        $wisata = wisata::find($id);
        return view('wisata.lihat')->with(array('wisata'=>$wisata));
    }

    public function edit($id) {
        $wisata = wisata::find($id);
        $penginapan = new penginapan;
        $transportasi = new transportasi;
        return view('wisata.edit', compact('wisata','penginapan','transportasi'));
    }

    public function update($id, wisataRequest $input) {
        $wisata = wisata::find($id);
        $wisata->nama = $input->nama;
        $wisata->alamat = $input->alamat;
        $wisata->fasilitas = $input->fasilitas;
        $wisata->tarif = $input->tarif;

        // $image_path = public_path().'/image/wisata/'.$wisata->file;
        // unlink($image_path);

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $input->file('file');
        $fileName   = $file->getClientOriginalName();
        $input->file('file')->move("image/wisata/", $fileName);

        $wisata->file = $fileName;
        $wisata->penginapan_id = $input->penginapan_id;
        $wisata->transportasi_id = $input->transportasi_id;
        $wisata->save();

        return redirect('admin/wisata');
    }
}