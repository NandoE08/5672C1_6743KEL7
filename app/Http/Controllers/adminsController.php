<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\adminRequest;

use App\Http\Requests;

use App\pengguna;

use App\admins;

use Hash;

class adminsController extends Controller{
    
    public function index(){
    	return view('admins.index', ['data'=>admins::all()]);
    }

    public function welcome(){
        return view('admins.welcome');
    }

    public function tambah() {
        $pengguna = new pengguna;
        return view('admins.save', compact('admins','pengguna'));
    }

    public function save(adminRequest $input){
    	$pengguna = new pengguna($input->only('email','password'));
        $pengguna->level = 'admin';
        if($pengguna->save()){
	        $admins = new admins();
	        $admins->nama = $input->nama;
	        $admins->alamat = $input->alamat;
	        $admins->pekerjaan = $input->pekerjaan;
        	if ($pengguna->admins()->save($admins)){
                return redirect('admin/admins');
            }
        	return redirect('admin/admins');
    	}
        
    }

    public function lihat($id) {
        $admins = admins::find($id);
        return view('admins.lihat')->with(array('admins'=>$admins));
    }

    public function edit($id) {
        $admins = admins::find($id);
        return view('admins.edit')->with(array('admins'=>$admins));
    }

    public function update($id, Request $input) {
        $admins = admins::find($id);
        $pengguna = $admins->pengguna;
        $admins->nama = $input->nama;
        $admins->alamat = $input->alamat;
        $admins->pekerjaan = $input->pekerjaan;
        $admins->save();
        if (!is_null($input->email)){
                $pengguna->fill($input->only('email')); 
            if (!empty($input->password)) {
                $pengguna->password = $input->password;
            }
            if ($pengguna->save()) {
                return redirect('admin/admins');
            }
        }else{
            return redirect('admin/admins/edit');
        } 
        return redirect('admin/admins');
    }
    
    // public function hapus($id) {
    //     $admins = admins::find($id);
    //     if($admins->delete()){
    //         $pengguna = pengguna::find($id);
    //         $admins->pengguna()->delete($pengguna);
    //         return redirect('admin/admins');
    //     }
    //     return redirect('admin/admins');
    // }
}
