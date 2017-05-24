<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;

class memberRequest extends Request{
	public function authorize(){
		return true;
	}


public function rules()
{
	$validasi = [
				  'nama'=>'required',
				  'alamat'=>'required',
				  'id_paket'=>'required',
				  'id_kelas'=>'required',
				  'id_jadwal'=>'required',
				  'id_supir'=>'required',
				  'id_mobil'=>'required', 
				  'username'=>'required',
				  'level'=>'required'];

if($this -> is('member/tambah')){
	$validasi['password'] = 'required';

}
return $validasi;
}
}