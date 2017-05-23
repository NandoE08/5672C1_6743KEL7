<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesanan extends Model {

    protected $table = 'pesanan';
    protected $fillable = ['member_id','wisata_id','nama','no_tlp','rekening'];
    protected $guarded = ['id'];

    public function member() {
		return $this->belongsTo(member::class);
	}

	public function wisata() {
		return $this->belongsTo(wisata::class);
	}
}