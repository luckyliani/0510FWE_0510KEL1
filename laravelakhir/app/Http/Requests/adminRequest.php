<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;

class adminRequest extends Request{
	public function authorize(){
		return true;
	}


public function rules()
{
	$validasi = [
				  'nama'=>'required',
				  'umur'=>'required',
				  'username'=>'required',
				  'level'=>'required'];

if($this -> is('admin/tambah')){
	$validasi['password'] = 'required';

}
return $validasi;
}
}