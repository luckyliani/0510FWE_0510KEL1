<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
	protected $table = 'jadwal';
	protected $fillable = ['jam', 'hari', 'jumlah_hari'];

	public function member(){
		return $this->hasmany(member::class);
	}
    
}
