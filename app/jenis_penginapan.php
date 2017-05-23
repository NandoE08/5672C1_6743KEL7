<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis_penginapan extends Model {

    protected $table = 'jenis_penginapan';
    protected $fillable = ['nama','keterangan'];
    protected $guarded = ['id'];

    public function penginapan() {
		return $this->hasMany(penginapan::class,'jenis_penginapan_id');
	}
}