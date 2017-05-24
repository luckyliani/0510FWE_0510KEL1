<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = ['nama','keterangan'];
    
    public function member(){
		return $this->hasMany(member::class);
	}
}