<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticable;

class pengguna extends Authenticable {

    protected $table = 'pengguna';
    protected $fillable = ['email','password','level'];

    public function admins(){
		return $this->hasOne(admins::class,'pengguna_id');
	}

	public function member(){
		return $this->hasOne(member::class,'pengguna_id');
	}
	
	public function levellogin($tingkat){
		$this->auth = app('auth');
		if($this->auth->user()->level == $tingkat){
			return true;
		}else{
			return false;
		}
	}
}