<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Pengguna extends Model implements AuthenticatableContract
{
	use Authenticatable;
	protected $table ='pengguna';
	 protected $fillable = ['Username','Password','level'];
    public function member (){
		return $this->hasOne(member::class);
	}

	public function admin (){
		return $this->hasOne(admin::class);
	}
}
