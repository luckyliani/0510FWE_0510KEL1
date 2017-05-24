<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supir extends Model
{
    protected $table = 'supir';
    protected $fillable = ['nama','sim','alamat'];
    
    public function member(){
		return $this->hasOne(member::class);
}
}