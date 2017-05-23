<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admins extends Model {

    protected $table = 'admins';
    protected $fillable = ['nama','email','alamat','pekerjaan','pengguna_id'];
    protected $guarded = ['id'];

    public function pengguna() {
		return $this->belongsTo(pengguna::class);
	}

	public function getEmailAttribute(){
    	return $this->pengguna->email;
    }
}