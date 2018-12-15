<?php

namespace App\Http\Controllers;

use App\Http\Middleware\event;
use App\Mahasiswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function lamanlogin(){
        return view('auth.login');
    }

    public function formlogin(Request $request){
        $email      = $request->input('email');
        $password   = $request->input('password');
        $mahasiswa  = Mahasiswa::where('email',$email)->get();
        $emaildb = $mahasiswa->pluck('email')->first();

        if($emaildb!=null){
            $passworddb = $mahasiswa->pluck('password')->first();
            if($password==$passworddb) {
                return redirect()->route('home');
            }
        }


        return view('login');

    }
}
