<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\jadwalRequest;
use App\jadwal;
use Input;
use Redirect;
use Informasi;

class jadwalcontroller extends Controller
{
    public function awal(){
        return view('jadwal.awal',['data'=>jadwal::all()]);
    }
    public function tambah(){
        return view('jadwal.tambah');
    }
    public function simpan(jadwalRequest $input){
        $jadwal = new jadwal;
        $jadwal->id=$input->id;
        $jadwal->jam=$input->jam;
        $jadwal->hari=$input->hari;
        $jadwal->jumlah_hari=$input->jumlah_hari;
        $informasi = $jadwal->save() ? 'berhasil input' : 'gagal simpan';
        return redirect('jadwal')->with(['informasi'=>$informasi]);
    }

    public function edit($id){
        $jadwal=jadwal::find($id);
        return view('jadwal.edit', compact('jadwal'));
    }
public function lihat($id){
        $jadwal=jadwal::find($id);
        return view('jadwal.lihat')->with(array('jadwal'=>$jadwal));
    }

   public function update($id, jadwalRequest $input){
        $jadwal = jadwal::find($id);
         $jadwal->id=$input->id;
        $jadwal->jam=$input->jam;
        $jadwal->hari=$input->hari;
        $jadwal->jumlah_hari=$input->jumlah_hari;
        $informasi = $jadwal->save()? 'berhasil update' : 'gagal ya';

        return redirect('jadwal')-> with(['informasi'=>$informasi]);
    }
    public function hapus($id){
        $jadwal = jadwal::find($id);
        $informasi = $jadwal->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('jadwal')->with(['informasi'=>$informasi]);
    }

    }