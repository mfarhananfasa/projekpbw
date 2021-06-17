<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\PasienController;
use RealRashid\SweetAlert\Facades\Alert;

class UserAuthController extends Controller
{
    function login(){
        return view('auth.login');
    }

    function register(){
        return view('auth.register');
    }

    function create(Request $request){
        //Request Validasi
        $request->validate([
            'username'=>'required|unique:users',
            'password'=>'required|min:5|max:12',
            'nama'=>'required',
            'umur'=>'required',
            'alamat'=>'required'
        ]);

        //jika form validasi sukses
        $user = new User;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->nama     = $request->nama;
        $user->umur     = $request->umur;
        $user->alamat   = $request->alamat;
        $query          = $user->save();

        if($query){

            if(User::all()->count() == 1){
                PasienController::generateWaktu(9, 11, 15);
            }

            alert()->success('Akun anda berhasil dibuat!','Silahkan login dengan akun tersebut.');

            return redirect('/login');
        }else{
            return back()->with('fail', 'Something wnet wrong');
        }

    }

    function check(Request $request){
        //Request Validasi
        $credentials = $request->validate([
            'username'=>'required',
            'password'=>'required|min:5|max:12'
        ]);

        //jika form validasi sukses
        $user = User::where('username','=', $request->username)->first();
        if(Auth::attempt($credentials)){
            if(Hash::check($request->password, $user->password)){

                //jika password cocok, redirect...
                toast('Anda berhasil login!','success');
                $request->session()->put('LoggedUser', $user->id);

                return redirect('/');
            }else{
                return back()->with('fail', 'Invalid Password');
            }
        }else{
            return back()->with('fail', 'No acoount found for this username');
        }
    }

    function welcome(){
        if(session()->has('LoggedUser')){
            $user = User::where('id', '=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo'=>$user
            ];
        }
        return view('/');
    }

    public function logout(){
        Auth::logout();

        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            toast('Anda berhasil keluar!','success');
            return redirect('/');
        }
    }
}
