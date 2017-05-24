<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\supirRequest;
use App\supir;
use Input;
use Redirect;
use Informasi;

class supircontroller extends Controller
{
    public function awal(){
        return view('supir.awal',['data'=>supir::all()]);
    }
    public function tambah(){
        return view('supir.tambah');
    }
    public function simpan(supirRequest $input){
        $supir = new supir;
        $supir->id=$input->id;
        $supir->nama=$input->nama;
        $supir->sim=$input->sim;
        $supir->alamat=$input->alamat;
        $informasi = $supir->save() ? 'berhasil input' : 'gagal simpan';
        return redirect('supir')->with(['informasi'=>$informasi]);
    }

    public function edit($id){
        $supir=supir::find($id);
        return view('supir.edit', compact('supir'));
    }
public function lihat($id){
        $supir=supir::find($id);
        return view('supir.lihat')->with(array('supir'=>$supir));
    }

   public function update($id, supirRequest $input){
        $supir = supir::find($id);
         $supir->id=$input->id;
        $supir->nama=$input->nama;
        $supir->sim=$input->sim;
        $supir->alamat=$input->alamat;
        $informasi = $supir->save()? 'berhasil update' : 'gagal ya';

        return redirect('supir')-> with(['informasi'=>$informasi]);
    }
    public function hapus($id){
        $supir = supir::find($id);
        $informasi = $supir->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('supir')->with(['informasi'=>$informasi]);
    }

    }