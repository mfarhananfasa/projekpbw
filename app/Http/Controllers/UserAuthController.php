<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\PasienController;

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

            return redirect('/login')->with('success', 'You have been successfuly registered');
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

    function logout(){
        Auth::logout();

        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/');
        }
    }
}
