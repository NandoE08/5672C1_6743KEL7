<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model {

    protected $table = 'member';
    protected $fillable = ['nama','email','alamat','pengguna_id'];
    protected $guarded = ['id'];

    public function saran() {
		return $this->hasMany(saran::class,'member_id');
	}

    public function pesanan() {
		return $this->hasMany(pesanan::class,'member_id');
	}

    public function pengguna() {
		return $this->belongsTo(pengguna::class);
	}

	public function getEmailAttribute(){
    	return $this->pengguna->email;
    }
}