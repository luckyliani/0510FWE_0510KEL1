<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
	 protected $table ='member';
	  protected $fillable =['username','alamat','pengguna_id'];
	 protected $guarded = ['id'];

	public function paket(){
		return $this->belongsTo(paket::class);
	}	

	public function kelas (){
		return $this->belongsTo(kelas::class);
	}

	public function jadwal (){
		return $this->belongsTo(jadwal::class);
	}

	public function supir (){
		return $this->belongsTo(supir::class);
	}

	public function mobil (){
		return $this->belongsTo(mobil::class);
	}

	public function pengguna (){
		return $this->belongsTo(pengguna::class);
	}

	public function transaksi(){
		return $this->hasOne(transaksi::class);
	}



}
