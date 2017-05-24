<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = 'users';
    protected $fillable = ['username','password','id_member'];
    
    public function member(){
		return $this->belongsToMany(member::class);
}
