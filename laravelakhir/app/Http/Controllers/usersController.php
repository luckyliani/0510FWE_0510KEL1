<?php

namespace App\Http\Controllers;

use App\Http\Requests\usersRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\users;
use Input;
use Redirect;
use informasi;

class usersController extends Controller
{
    public function awal(){
    	return view('users.awal',['data'=>users::all()]);
    }
    public function tambah(){
    	return view('users.tambah');
    }
    public function simpan(usersRequest $input){
        $this->validate($input,[
            'username'=>'required',
            'password'=>'required',]);
    	$users = new users;
    	$users->username=$input->username;
        $users->password=$input->password;
        $informasi = $users->save() ? 'berhasil input' : 'gagal simpan';
        return redirect('users')->with(['informasi'=>$informasi]);
    }

    public function edit($id){
        $users=users::find($id);
        return view('users.edit')->with(array('users'=>$users));
    }
public function lihat($id){
        $users=users::find($id);
        return view('users.lihat')->with(array('users'=>$users));
    }

    public function update($id, usersRequest $input){
        $users = users::find($id);
        $users ->users=$input->username;
        $users ->password=$input->password;
        $informasi = $users->save()? 'berhasil update' : 'gagal ya';

        return redirect('users')-> with(['informasi'=>$informasi]);
    }
    public function hapus($id){
        $users = users::find($id);
        $informasi = $users->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('users')->with(['informasi'=>$informasi]);
    }

    }