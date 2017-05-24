<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\transaksiRequest;
use App\transaksi;
use App\member;
use App\paket;
use Input;
use Redirect;
use informasi;

class transaksiController extends Controller
{
    public function awal()
    {
        $data = transaksi::join('member','transaksi.id_member','=','member.id')
        ->join('paket','transaksi.id_paket','=','paket.id')
         ->select('transaksi.id','member.nama as nm','paket.harga')->get();
        return view('transaksi.awal', compact('data'));
    }

    public function tambah()
    {      
        $transaksi = new transaksi;
        $member = new member;
        $paket = new paket;
        return view('transaksi.tambah',compact('member','paket'));
        return $this->simpan();
    }

    public function simpan(transaksiRequest $input) {$transaksi = new transaksi;
        $transaksi->id= $input->id;
        $transaksi->id_member = $input->id_member;
        $transaksi->id_paket = $input->id_paket;
        if($transaksi->save()) $this->informasi = "Data Hasil Tani Berhasil Disimpan";
        return redirect('transaksi')->with(['informasi'=> $this->informasi]);
    }
    
    public function edit($id){
        $transaksi = transaksi::find($id);
        $member = new member;
        $paket = new paket;
        return view('transaksi.edit',compact('member','paket','transaksi'));
    }

    public function lihat($id){
        $transaksi = transaksi::find($id);
        return view('transaksi.lihat')->with(array('transaksi'=>$transaksi));
    }

    public function update($id,transaksiRequest $input)
    {
        $transaksi = transaksi::find($id);
        $transaksi->id= $input->id;
        $transaksi->id_member = $input->id_member;
        $transaksi->id_paket = $input->id_paket;
       $informasi = $transaksi->save() ? 'Berhasil Simpan Data' : 'Gagal Update Data';
        return redirect('transaksi')->with(['informasi'=>$informasi]);
    }
    public function hapus($id){
        $transaksi = transaksi::find($id);
        if ($transaksi->pengguna()->delete()){
        if($transaksi->delete()) $this->informasi = "Data transaksi Berhasil Dihapus";}
        return redirect('transaksi')->with(['informasi'=>$this->informasi]);
    }
}