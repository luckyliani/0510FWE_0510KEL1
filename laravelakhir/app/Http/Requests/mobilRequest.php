<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;

class mobilRequest extends Request{
	public function authorize(){
		return true;
	}


public function rules()
{
	$validasi = ['id'=>'required',
				  'nama'=>'required',
				  'jenis_transmisi'=>'required',
				  'no_plat'=>'required',
				  ];

if($this -> is('mobil/tambah')){
}
return $validasi;
}
}