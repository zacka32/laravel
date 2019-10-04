<?php

namespace App\Http\Controllers;
use Session;
use App\Login;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
    	return view('index');
    }

    function login(Request $kiriman) {
    	$data = Login::where('nik', $kiriman->nik)->where('password', md5($kiriman->password))->first();
    	if(count($data)>0) {
    		//berhasil login
    		// Auth::guard('staff')->LoginUsingID($data[0]['nik']); //masuk menggunakan id dan semua akan jadi 
    		
    		// Session::put('nik',$data->nik);
    		Session::put('nik', $data->nik);
    		Session::put('namalengkap', $data->nama_lengkap);
    		Session::put('passuser', $data->password);
    		Session::put('atasan', $data->atasan);
    		Session::put('idgroup', $data->ID_GROUP);
    		Session::put('superuser', $data->superuser);

    		return redirect ('hrd/dashboard');
    		 // return view('siswa/edit', ['siswa' => $siswa]);
    	 	} else {

    	 	return view('index');	
    	}
    }

    function keluar() {
    	// if(Auth::guard('staff')->check()) {
    	// 	Auth::guard('staff')->logout();
    	// } else if(Auth::guard('admin')->check()) {
    	// 	Auth::guard('admin')->logout();
    	// }
    		Auth::guard('staff')->logout();
    		return redirect ('hrd');
    }

    function home() {
    	return view ('content/home');
    }
}
