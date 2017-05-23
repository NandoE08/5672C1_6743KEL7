<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\penggunaRequest;

use App\pengguna;

use Hash;

use Crypt;

class penggunaController extends Controller {
    
    public function index(){
        $data = pengguna::all();
    	return view('pengguna.index', compact('data'));
    }

    public function tambah() {
        return view('pengguna.save');
    }

    public function save(penggunaRequest $input){
        $pengguna = new pengguna();
        $pengguna->email = $input->email;
        $pengguna->password = $input->password;
        $pengguna->level = $input->level;
        $informasi=$pengguna->save() ? 'Sucsessful Add' : 'Failed !';
        return redirect('admin/pengguna')->with(['informasi'=>$informasi]);
    }

    public function lihat($id) {
        $pengguna = Pengguna::find($id);
        return view('pengguna.lihat')->with(array('pengguna'=>$pengguna));
    }

    public function edit($id) {
        $pengguna = pengguna::find($id);
        return view('pengguna.edit')->with(array('pengguna'=>$pengguna));
    }

    public function update($id, penggunaRequest $input) {
        $pengguna = pengguna::find($id);
        $pengguna->email = $input->email;
        $pengguna->password = $input->password;
        $pengguna->level = $input->level;
        $pengguna->save();
        return redirect('admin/pengguna');
    }
    
    // public function hapus($id) {
    //     $pengguna = Pengguna::find($id);
    //     $informasi= $pengguna->delete();
    //     return redirect('admin/pengguna');
    // }
}