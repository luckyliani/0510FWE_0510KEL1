<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;

class ruteRequest extends Request{
	public function authorize(){
		return true;
	}


public function rules()
{
	$validasi = ['id'=>'required',
				  'start'=>'required',
				  'finish'=>'required',
				  ];

if($this -> is('rute/tambah')){
}
return $validasi;
}
}