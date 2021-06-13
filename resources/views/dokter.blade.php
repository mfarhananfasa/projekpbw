@extends('template')
@section('title','Info Dokter')

@section('isi')
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <div id="dokter">
    <div class="container">
        <div class="row">
        <div class="col text-center p-3">
            <h2 style="color: rgb(0, 0, 0)"><b>Info Dokter</b></h2>
        </div>
        </div>
        <div class="row">
        <div class="col-4" style="margin-left: 33%">
            <div class="card">
            <img src="{{asset('dokter/img/2.jpg')}}"class="card-img-top" alt="1" />
            <div class="card-body">
                <h5 class="card-title"><b>dr. Edwin Ongkorahardjo</b></h5>
                <p class="card-text">dr. Edwin Ongkorahardjo adalah seorang Dokter Spesialis neurologi.</p>

                <!-- pop up 1-->
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Detail</button>
                <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">dr. Edwin Ongkorahardjo</h4>
                    </div>
                    <div class="modal-body">
                        <p>Layanan kesehatan yang dapat beliau berikan berupa konsultasi penyakit dan gangguan saraf. Jam Layanan <b>Senin-Kamis Pukul 09.00-11.00</b></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
@endsection
