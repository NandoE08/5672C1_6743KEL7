<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\transportasiRequest;

use App\transportasi;

class transportasiController extends Controller {
    
    public function index(){
    	return view('transportasi.index', ['data'=>transportasi::all()]);
    }

    public function tambah() {
        return view('transportasi.save');
    }


    public function save(transportasiRequest $input){

        $transportasi = new transportasi();
        $transportasi->nama = $input->nama;
        $transportasi->tarif = $input->tarif;

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $input->file('file');
        $fileName   = $file->getClientOriginalName();
        $input->file('file')->move("image/transportasi/", $fileName);
        
        $transportasi->file = $fileName;

        $transportasi->save();
        $notification = array(
        'message' => 'successfully', 
        'alert-type' => 'success'
        );
        return redirect('admin/transportasi')->with('notification',$notification);

    }

    public function hapus($id) {
        $transportasi = transportasi::find($id);
        // $image_path = public_path().'/image/transportasi/'.$transportasi->file;
        // unlink($image_path);
        $transportasi->delete();
        return redirect('admin/transportasi');
    }

    public function lihat($id) {
        $transportasi = transportasi::find($id);
        return view('transportasi.lihat')->with(array('transportasi'=>$transportasi));
    }

    public function edit($id) {
        $transportasi = transportasi::find($id);
        return view('transportasi.edit')->with(array('transportasi'=>$transportasi));
    }

    public function update($id, transportasiRequest $input) {
        $transportasi = transportasi::find($id);
        $transportasi->nama = $input->nama;
        $transportasi->tarif = $input->tarif;
        
        // $image_path = public_path().'/image/transportasi/'.$transportasi->file;
        // unlink($image_path);

        $file       = $input->file('file');
        $fileName   = $file->getClientOriginalName();
        $input->file('file')->move("image/transportasi/", $fileName);
        
        $transportasi->file = $fileName;

        $informasi=$transportasi->save();
        return redirect('admin/transportasi');
    }
}