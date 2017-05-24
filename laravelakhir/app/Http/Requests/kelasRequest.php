<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;

class kelasRequest extends Request{
	public function authorize(){
		return true;
	}


public function rules()
{
	$validasi = ['id'=>'required',
				  'nama'=>'required',
				  'keterangan'=>'required',
				  ];

if($this -> is('kelas/tambah')){
}
return $validasi;
}
}