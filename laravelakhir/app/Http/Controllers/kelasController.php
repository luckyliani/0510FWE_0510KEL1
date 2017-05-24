<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\kelasRequest;
use App\kelas;
use Input;
use Redirect;
use Informasi;

class kelascontroller extends Controller
{
    public function awal(){
        return view('kelas.awal',['data'=>kelas::all()]);
    }
    public function tambah(){
        return view('kelas.tambah');
    }
    public function simpan(kelasRequest $input){
        $kelas = new kelas;
        $kelas->id=$input->id;
        $kelas->nama=$input->nama;
        $kelas->keterangan=$input->keterangan;
        $informasi = $kelas->save() ? 'berhasil input' : 'gagal simpan';
        return redirect('kelas')->with(['informasi'=>$informasi]);
    }

    public function edit($id){
        $kelas=kelas::find($id);
        return view('kelas.edit', compact('kelas'));
    }
public function lihat($id){
        $kelas=kelas::find($id);
        return view('kelas.lihat')->with(array('kelas'=>$kelas));
    }

   public function update($id, kelasRequest $input){
        $kelas = kelas::find($id);
        $kelas->id=$input->id;
        $kelas->nama=$input->nama;
        $kelas->keterangan=$input->keterangan;
        $informasi = $kelas->save()? 'berhasil update' : 'gagal ya';

        return redirect('kelas')-> with(['informasi'=>$informasi]);
    }
    public function hapus($id){
        $kelas = kelas::find($id);
        $informasi = $kelas->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('kelas')->with(['informasi'=>$informasi]);
    }

    }