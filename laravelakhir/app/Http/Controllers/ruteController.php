<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ruteRequest;
use App\rute;
use Input;
use Redirect;
use Informasi;

class rutecontroller extends Controller
{
    public function awal(){
        return view('rute.awal',['data'=>rute::all()]);
    }
    public function tambah(){
        return view('rute.tambah');
    }
    public function simpan(ruteRequest $input){
        $rute = new rute;
        $rute->id=$input->id;
        $rute->start=$input->start;
        $rute->finish=$input->finish;
        $informasi = $rute->save() ? 'berhasil input' : 'gagal simpan';
        return redirect('rute')->with(['informasi'=>$informasi]);
    }

    public function edit($id){
        $rute=rute::find($id);
        return view('rute.edit', compact('rute'));
    }
public function lihat($id){
        $rute=rute::find($id);
        return view('rute.lihat')->with(array('rute'=>$rute));
    }

   public function update($id, ruteRequest $input){
        $rute = rute::find($id);
        $rute->id=$input->id;
        $rute->start=$input->start;
        $rute->finish=$input->finish;
        $informasi = $rute->save()? 'berhasil update' : 'gagal ya';

        return redirect('rute')-> with(['informasi'=>$informasi]);
    }
    public function hapus($id){
        $rute = rute::find($id);
        $informasi = $rute->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('rute')->with(['informasi'=>$informasi]);
    }

    }