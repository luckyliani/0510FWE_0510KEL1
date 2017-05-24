<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{	
	protected $table='admin';
    public function pengguna (){
		return $this->belongsTo(pengguna::class);
	}
}
