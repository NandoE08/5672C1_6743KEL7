<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\pesananRequest;

use App\Http\Requests\saranRequest;

use App\Http\Requests\memberRequest;

use App\wisata;

use App\penginapan;

use App\transportasi;

use App\pesanan;

use App\member;

use App\pengguna;

use App\saran;

use Auth;

use Hash;

class indexController extends Controller {

    public function index(){
    	return view('index.index', ['datawisata'=>wisata::all()]);
    }

    public function order(){
    	return view('index.wisata', ['data'=>wisata::all()]);
    }

    public function orderinfo($id){
        $wisata = wisata::find($id);
        return view('index.info')->with(array('wisata'=>$wisata));
    }

    public function add($id){
        $wisata = wisata::find($id);
        $member = new member;
        $pesanan = new pesanan;
        return view('index.pesan', compact('wisata','member','pesanan'));
    }

    public function save(pesananRequest $input){
        $member = new member;
        $wisata = new wisata;
        $pesanan = new pesanan();
        $pesanan->member_id = Auth::user()->member->id;
        $pesanan->wisata_id = $input->wisata_id;
        $pesanan->nama = $input->nama;
        $pesanan->no_tlp = $input->no_tlp;
        $pesanan->rekening = $input->rekening;
        $pesanan->save();
        return redirect('/wisata');
    }

    public function tambah() {
        $pengguna = new pengguna;
        return view('member.save', compact('pengguna'));
    }

    public function daftar(memberRequest $input){
        $pengguna = new pengguna($input->only('email','password'));
        $pengguna->level = 'member';
        if($pengguna->save()){
            $member = new member();
            $member->nama = $input->nama;
            $member->alamat = $input->alamat;
            if ($pengguna->member()->save($member)){
                Auth::login($pengguna);
                return redirect('/');
            }
            return redirect('/register');
        }
    }

    public function plus() {
        $member = new member;
        return view('index.welcome', compact('member'));
    }

    public function write(saranRequest $input){
        $saran = new saran();
        $saran->member_id = Auth::user()->member->id;
        $saran->nama = $input->nama;
        $saran->saran = $input->saran;
        $saran->save();
        return redirect('/');
    }

    public function profile(){
    	return view('index.index');
    }

    public function about(){
    	return view('index.index');
    }
}