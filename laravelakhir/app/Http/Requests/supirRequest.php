<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;

class supirRequest extends Request{
	public function authorize(){
		return true;
	}


public function rules()
{
	$validasi = ['id'=>'required',
				  'nama'=>'required',
				  'sim'=>'required',
				  'alamat'=>'required',
				  ];

if($this -> is('supir/tambah')){
}
return $validasi;
}
}