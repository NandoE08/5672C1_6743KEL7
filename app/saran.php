<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class saran extends Model {

    protected $table = 'saran';
    protected $fillable = ['member_id','nama','saran'];
    protected $guarded = ['id'];

    public function member() {
		return $this->belongsTo(member::class);
	}
}