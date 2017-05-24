<?php

namespace App\Http\Controllers;
use App\Http\Requests\paketRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\paket;
use App\rute;
use Input;
use Redirect;
use Informasi;

class paketController extends Controller
{
  protected $informasi = 'Gagal Melakukan Aksi';
    public function awal() {
        $data = paket::join('rute','paket.id_rute','=','rute.id')->select('paket.id','paket.nama','paket.harga','rute.id','rute.start','rute.finish')->get();
                return view('paket.awal', compact('data'));
    }

    public function tambah(){
        $rute = new rute;
        return view('paket.tambah', compact('rute'));
    }

    public function simpan(paketRequest $input){
        $paket = new paket;
        $paket->id= $input->id;
        $paket->nama = $input->nama;
        $paket->harga = $input->harga;
        $paket->id_rute = $input->id_rute;
        if($paket->save()) $this->informasi = "Data Hasil Tani Berhasil Disimpan";
        return redirect('paket')->with(['informasi'=> $this->informasi]);
    }

    public function edit($id){
        $paket = paket::find($id);
        $rute = new rute;
        return view ('paket.edit', compact('rute','paket'));
    }

    public function lihat($id){
        $paket = paket::find($id);
        return view('paket.lihat')->with(array('paket'=>$paket));
    }

    public function update ($id, paketRequest $input){
        $paket = paket::find($id);
        $paket->id= $input->id;
        $paket->nama = $input->nama;
        $paket->harga = $input->harga;
        $paket->id_rute = $input->id_rute;
        $informasi = $paket->save() ? 'Berhasil Simpan Data' : 'Gagal Update Data';
        return redirect('paket')->with(['informasi'=>$informasi]);
    }

    public function hapus($id){
        $paket = paket::find($id);
        if($paket->delete()) $this->informasi = "Data paket Berhasil Dihapus";
        return redirect('paket')->with(['informasi'=>$this->informasi]);
    }
}