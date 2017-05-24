<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\mobilRequest;
use App\mobil;
use Input;
use Redirect;
use Informasi;

class mobilcontroller extends Controller
{
    public function awal(){
        return view('mobil.awal',['data'=>mobil::all()]);
    }
    public function tambah(){
        return view('mobil.tambah');
    }
    public function simpan(mobilRequest $input){
        $mobil = new mobil;
        $mobil->id=$input->id;
        $mobil->nama=$input->nama;
        $mobil->jenis_transmisi=$input->jenis_transmisi;
        $mobil->no_plat=$input->no_plat;
        $informasi = $mobil->save() ? 'berhasil input' : 'gagal simpan';
        return redirect('mobil')->with(['informasi'=>$informasi]);
    }

    public function edit($id){
        $mobil=mobil::find($id);
        return view('mobil.edit', compact('mobil'));
    }
public function lihat($id){
        $mobil=mobil::find($id);
        return view('mobil.lihat')->with(array('mobil'=>$mobil));
    }

   public function update($id, mobilRequest $input){
        $mobil = mobil::find($id);
        $mobil->id=$input->id;
        $mobil->nama=$input->nama;
        $mobil->jenis_transmisi=$input->jenis_transmisi;
        $mobil->no_plat=$input->no_plat;
        $informasi = $mobil->save()? 'berhasil update' : 'gagal ya';

        return redirect('mobil')-> with(['informasi'=>$informasi]);
    }
    public function hapus($id){
        $mobil = mobil::find($id);
        $informasi = $mobil->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('mobil')->with(['informasi'=>$informasi]);
    }

    }