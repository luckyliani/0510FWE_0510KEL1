<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 'transaksi';
    protected $guarded = ["id"];

    public function member(){
		return $this->belongsTo(member::class);
	}

	 public function paket(){
		return $this->belongsTo(paket::class);
	}


}
