<?php
namespace App\Http\Controllers;

use App\event;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('home_user');
        }
    }

    public function edit(User $user){
        return view('editprofile', compact('user'));
    }

    public function login(){
        return view('login');
    }
    public function loginPost(Request $request){
        $email = $request->email;
        $password = $request->password;
        $data = User::where('email',$email)->first();
        if(count($data) > 0){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('home_user');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !'.Hash::check($password,$data->password));
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah !');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }
    public function register(Request $request){
        return view('register');
    }
    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);
        $data =  new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success','Kamu berhasil Register');
    }

    public function update(Request $request, User $user){

        $data = $request->all();

        if($data['password'] == null)
        {
            unset($data['password']);
        }

        if($request->hasFile('foto'))
        {
            $img = $request->file('foto');
            $fileName = uniqid() . $img->getClientOriginalName();
            $path = 'uploads/profile/';
            $fullPath = $path . $fileName;
            Storage::disk('public')->putFileAs($path, $img, $fileName);

            if($user->foto) {
                Storage::disk('public')->delete($user->foto);
            }

            $data['foto'] = $fullPath;
        }
        $user->update($data);

        return redirect('/');
    }
}