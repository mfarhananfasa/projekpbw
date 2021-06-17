@extends('template')
@section('title','Info Dokter')

@section('isi')
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


                <!-- Button trigger modal -->
                <button type="button" class="btn shadow" style="background-color: #3CADFF; color: white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Detail
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">dr. Edwin Ongkorahardjo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Layanan kesehatan yang dapat beliau berikan berupa konsultasi penyakit dan gangguan saraf. Jam Layanan <b>Senin-Kamis Pukul 09.00-11.00.
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn shadow" style="background-color: #F4C51E" data-bs-dismiss="modal">Close</button>
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
