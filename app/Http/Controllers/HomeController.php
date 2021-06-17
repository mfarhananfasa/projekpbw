<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Time;
use App\Models\User;

class HomeController extends Controller
{
    public function index() {
        $times = Time::all();
        $data = User::all();

        return view('welcome', compact('data', 'times'));
    }
}
