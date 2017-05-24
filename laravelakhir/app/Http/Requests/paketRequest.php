<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;

class paketRequest extends Request{
	public function authorize(){
		return true;
	}


public function rules()
{
	$validasi = ['id'=>'required',
				  'nama'=>'required',
				  'harga'=>'required',
				  'id_rute'=>'required',
				  ];

if($this -> is('paket/tambah')){
}
return $validasi;
}
}