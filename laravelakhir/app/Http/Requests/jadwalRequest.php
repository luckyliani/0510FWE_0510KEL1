<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;

class jadwalRequest extends Request{
	public function authorize(){
		return true;
	}


public function rules()
{
	$validasi = ['id'=>'required',
				  'jam'=>'required',
				  'hari'=>'required',
				  'jumlah_hari'=>'required',
				  ];

if($this -> is('jadwal/tambah')){
}
return $validasi;
}
}