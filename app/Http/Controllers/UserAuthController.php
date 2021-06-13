<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
            return back()->with('success', 'You have been successfuly registered');
        }else{
            return back()->with('fail', 'Something wnet wrong');
        }

    }

    function check(Request $request){
        //Request Validasi
        $request->validate([
            'username'=>'required',
            'password'=>'required|min:5|max:12'
        ]);

        //jika form validasi sukses

        $user = User::where('username','=', $request->username)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){

                //jika password cocok, redirect...
                $request->session()->put('LoggedUser', $user->id);
                return redirect('welcome');
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
        return view('welcome');
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }
}
