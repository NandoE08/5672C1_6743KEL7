<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penginapan extends Model {

    protected $table = 'penginapan';
    protected $fillable = ['nama_penginapan','alamat','fasilitas','tarif','file','jenis_penginapan_id'];
    protected $guarded = ['id'];

    public function wisata() {
		return $this->hasOne(wisata::class,'penginapan_id');
	}

	public function jenis_penginapan() {
		return $this->belongsTo(jenis_penginapan::class);
	}
}