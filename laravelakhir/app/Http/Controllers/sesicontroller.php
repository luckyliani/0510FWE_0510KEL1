<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Pengguna;
use Illuminate\Auth\SessionGuard;
use Auth;

/**
* 
*/
class sesicontroller extends Controller
{
public function index()
    {
        return view('welcome');
    }

    public function form()
    {
        if(Auth::check()){
            return redirect('/');
        }
        return view('login');
    }
    public function validasi(Request $input)
    {
        $this->validate($input,[
            'username'=>'required',
            'password'=>'required',
        ]);

        $pengguna = Pengguna::where($input->only('username','password'))->first();
        if(! is_null($pengguna)){
            Auth::login($pengguna);
            if(Auth::check())
                if (Auth::user()->level == 'admin') {
                    return redirect('/')->with('informasi',"Selamat datang , anda telah berhasil login ".Auth::user()->username);
                }elseif (Auth::user()->level == 'member') {
                    return redirect('/')->with('informasi',"Selamat datang , anda telah berhasil login ".Auth::user()->username);
                }
                
        }
           return redirect('/login')->withErrors(['Pengguna tidak ditemukan']);
    }


    public function logout()
    {
        if(Auth::check()){
                Auth::logout();
                return redirect('/login')->withErrors(['Silahkan Masuk']);
        }else{
                return redirect('/login')->withErrors(['Silahkan masuk jangan keluar dalam ya']);
        }
    }
}