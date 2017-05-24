<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{

	protected $table = 'mobil';
    
    public function member(){
		return $this->hasmany(member::class);
	}
}