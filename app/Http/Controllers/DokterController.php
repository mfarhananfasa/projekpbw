<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DokterController extends Controller
{
    public function index() {
        if(Auth::check()){
            return view('dokter');
        }
        else{
            return view('/');
        }
    }
}
