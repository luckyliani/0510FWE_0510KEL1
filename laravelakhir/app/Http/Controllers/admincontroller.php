<?php
namespace App\Http\Controllers;

use App\Http\Requests\adminRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\pengguna;
use Input;
use Redirect;
use Informasi;

class admincontroller extends Controller
{
  protected $informasi = 'Gagal Melakukan Aksi';
    public function awal(){
        return view('member.awal');
}

public function tambah(){
        $admin->nama=$input->nama;
        $admin->umur=$input->umur;
        return view('member.tambah');
    }

public function simpan(adminRequest $input){$pengguna = new pengguna($input->only('username','password','level'));
        if ($pengguna->save()){
        $admin = new admin;
        $admin->nama=$input->nama;
        $admin->umur=$input->umur;
        $admin->pengguna_id=$input->pengguna_id;
        if ($pengguna->admin()->save($admin))$this->informasi='berhasil simpan data';}
        return redirect('admin')->with(['informasi'=> $this->informasi]);
    }

    public function edit($id){
        $admin=admin::find($id);
        return view('admin.edit')->with(array('admin'=>$admin));
       }

        public function update($id, adminRequest $input){
        $admin = admin::find($id);
        $pengguna = $admin->pengguna;
        $admin ->nama=$input->nama;
        $admin ->umur=$input->umur;
        $informasi = $admin->save() ? 'Berhasil Simpan Data' : 'Gagal Update Data';
        return redirect('admin')->with(['informasi'=>$informasi]);
    }

         public function hapus($id){
        $admin = admin::find($id);
        if ($admin->pengguna()->delete()){
            if ($admin->delete()) $this->informasi = 'berhasil hapus';
        } return redirect('admin')->with(['informasi'=> $this->informasi]);
    }
}

