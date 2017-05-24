<?php

namespace App\Http\Controllers;

use App\Http\Requests\memberRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\member;
use App\paket;
use App\kelas;
use App\jadwal;
use App\supir;
use App\mobil;
use App\rute;
use App\pengguna;
use Input;
use Redirect;
use Informasi;

class memberController extends Controller
{
  protected $informasi = 'Gagal Melakukan Aksi';
    public function awal(){
        $data = member::join('paket','member.id_paket','=','paket.id')
        ->join('kelas','member.id_kelas','=','kelas.id')
        ->join('jadwal','member.id_jadwal','=','jadwal.id')
        ->join('supir','member.id_supir','=','supir.id')
        ->join('mobil','member.id_mobil','=','mobil.id')
        ->select('member.id','member.nama','member.alamat','paket.nama as np','kelas.nama as nk','jadwal.hari','supir.nama as ns','mobil.nama as nm')->get();
        return view('member.awal', compact('data'));
    }

    public function tambah(){
        $paket = new paket;
        $kelas = new kelas;
        $jadwal = new jadwal;
        $supir = new supir;
        $mobil = new mobil;
        return view('member.tambah', compact('paket','kelas','jadwal','supir','mobil'));
    }

    public function simpan(memberRequest $input){
        $pengguna = new pengguna($input->only('username','password','level'));
        if ($pengguna->save()){
        $member = new member;
        $member->nama = $input->nama;
        $member->alamat = $input->alamat;
        $member
        ->id_paket = $input->id_paket;
        $member
        ->id_kelas = $input->id_kelas;
        $member
        ->id_jadwal = $input->id_jadwal;
        $member
        ->id_supir = $input->id_supir;
        $member
        ->id_mobil = $input->id_mobil;
        $member->pengguna_id=$input->pengguna_id;
        if ($pengguna->member()->save($member))$this->informasi='berhasil simpan data';
     else if ($member->pengguna()->save($pengguna))$this->informasi='berhasil simpan data';}
        return redirect('member')->with(['informasi'=> $this->informasi]);
    }

    public function edit($id){
        $member = member::find($id);
        $paket = new paket;
        $kelas = new kelas;
        $jadwal = new jadwal;
        $supir = new supir;
        $mobil = new mobil;
        return view ('member.edit', compact('paket','kelas','jadwal','supir','mobil','member'));
    }

    public function lihat($id){
        $member = member::find($id);
        return view('member.lihat')->with(array('member'=>$member));
    }

    public function update ($id, memberRequest $input){
        $member = member::find($id);
        $member->nama = $input->nama;
        $member->alamat = $input->alamat;
        $member
        ->id_paket = $input->id_paket;
        $member
        ->id_kelas = $input->id_kelas;
        $member
        ->id_jadwal = $input->id_jadwal;
        $member
        ->id_supir = $input->id_supir;
        $member
        ->id_mobil = $input->id_mobil;
        $informasi = $member->save() ? 'Berhasil Simpan Data' : 'Gagal Update Data';
        return redirect('member')->with(['informasi'=>$informasi]);
    }

    public function hapus($id){
        $member = member::find($id);
        if ($member->pengguna()->delete()){
        if($member->delete()) $this->informasi = "Data member Berhasil Dihapus";}
        return redirect('member')->with(['informasi'=>$this->informasi]);
    }
}