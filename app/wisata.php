<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wisata extends Model {

	protected $table = 'wisata';
    protected $fillable = ['nama','alamat','fasilitas','file','penginapan_id','transportasi_id'];
    protected $guarded = ['id'];

    public function pesanan() {
		return $this->hasMany(pesanan::class,'wisata_id');
	}

    public function penginapan() {
		return $this->belongsTo(penginapan::class);
	}

	public function transportasi() {
		return $this->belongsTo(transportasi::class);
	}
}