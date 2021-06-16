<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Time;
use App\Models\User;
use Carbon\Carbon;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if(Auth::check()){
            if(Auth::user()->id_times > 0) {
                if($request->has('search')){
                    $data = User::where('nama','LIKE','%'.$request->search.'%')->get();
                }
                else{
                    $data = User::all();
                }

                $times = Time::where('id_users', '<>', 0)->get();
                return view('pasien.pasien', compact('data', 'times'));
            }

            else{
                $times = Time::all();
                $data = User::where('id', Auth::user()->id)->first();
                return view('pasien.booking', compact('times', 'data'));
            }
        }
        else{
            return view('welcome');
        }

    }

    public function booking(Request $request){
        User::where('id', Auth::user()->id)->update([
            'id_times' => $request->jadwal,
        ]);

        Time::where('id', $request->jadwal)->update([
            'id_users' => Auth::user()->id,
        ]);

        return redirect("/pasien");
    }

    public static function generateWaktu($mulai, $selesai, $selisih){
        $jam = 0;
        $menit = 0;

        for($jam = $mulai; $jam < $selesai; $jam++){
            for($menit = 0; $menit < 60; $menit += $selisih){

                $waktu = Carbon::createFromTime($jam, $menit, 0, 0);

                Time::create([
                    'waktu' => $waktu
                ]);
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
