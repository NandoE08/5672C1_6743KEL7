<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\member;

use App\saran;

class saranController extends Controller {
    public function index(){
    	return view('saran.index',['data'=>saran::all()]);
    }

    public function hapus($id) {
        $saran = saran::find($id);
        $informasi= $saran->delete();
        return redirect('admin/saran');
    }
}