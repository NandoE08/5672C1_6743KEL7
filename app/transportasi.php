<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transportasi extends Model {
    
    protected $table = 'transportasi';
    protected $fillable = ['nama','tariff','file'];
    protected $guarded = ['id'];

    public function wisata() {
		return $this->hasOne(wisata::class,'transportasi_id');
	}
}