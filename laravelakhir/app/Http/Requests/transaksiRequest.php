<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;

class transaksiRequest extends Request{
	public function authorize(){
		return true;
	}


public function rules()
{
	$validasi = ['id'=>'required',
				  'id_member'=>'required',
				  'id_paket'=>'required',
				  ];

if($this -> is('transaksi/tambah')){
}
return $validasi;
}
}