<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pengguna;

use App\member;

class memberController extends Controller {
    public function index(){
    	return view('member.index', ['data'=>member::all()]);
    }

    public function lihat($id) {
        $member = member::find($id);
        return view('member.lihat')->with(array('member'=>$member));
    }

    public function hapus($id) {
        $member = member::find($id);
        if($member->delete()){
            $pengguna = pengguna::find($id);
            $member->pengguna()->delete($pengguna);
            return redirect('admin/member');
        }
        return redirect('admin/member');
    }
}