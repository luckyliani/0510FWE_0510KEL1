<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rute extends Model
{
    protected $table = 'rute';
   	protected $guarded = ['id'];
   	protected $fillable = ['start','finish'];
   	
   	public function paket(){
   		return $this->hasMany(paket::class);
   	}
}
