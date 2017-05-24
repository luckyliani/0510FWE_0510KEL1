<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paket extends Model
{
    protected $table = 'paket';
    protected $guarded =['id'];
    public function member(){
		return $this->hasMany(member::class);
}
	public function rute(){
		return $this->belongsto(rute::class);
	}

	public function transaksi(){
		return $this->hasOne(transaksi::class);
	}

}