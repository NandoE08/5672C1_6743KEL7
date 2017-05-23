<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pengguna;

use Illuminate\Auth\SessionGuard;

use Hash;

use Crypt;

use Auth;

class SessController extends Controller{
    
    public function index(){
    	return view('index.index');
    }

    public function ins(){
    	if(Auth::check()){
    		return redirect('/');
    	}
    	return view('login');
    }

    public function validas(Request $input){
    	$this->validate($input,[
    		'email'=>'required',
    		'password'=>'required'
    	]);
    	$pengguna = pengguna::where($input->only('email','password'))->first();
    	if(! is_null($pengguna)){
            
    		Auth::login($pengguna);
    		if(Auth::check() && Auth::user()->level=='member'){
    			return redirect('/');
    		}elseif(Auth::check() && Auth::user()->level=='admin'){
                return redirect('/admin');
            }
    		return redirect('/login');
    	}
    	return redirect('/login');
    }

    public function logout(){
    	if(Auth::check()){
    		Auth::logout();
    		return redirect('/');
    	}else{
    		return redirect('/login');
    	}
    }
}