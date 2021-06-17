@extends('template')
@section('title','Info Dokter')

@section('isi')
    <div id="dokter">
        <div class="col text-center p-3">
            <h2 style="color: rgb(0, 0, 0)"><b>Info Dokter</b></h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card" style="width: 25rem; height:100%">
                        <img src="{{asset('dokter/img/2.jpg')}}" class="card-img-top" alt="1">
                        <div class="card-body">
                          <h5 class="card-title">dr. Edwin Ongkorahardjo</h5>
                          <p class="card-text">dr. Edwin Ongkorahardjo adalah seorang Dokter Spesialis neurologi.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                        Layanan kesehatan yang dapat beliau berikan berupa konsultasi penyakit dan gangguan saraf. Jam Layanan Senin-selasa Pukul 09.00-11.00
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    
                                    </div>
                                </div>
                                </div>
                            </div>                    
                        </div>
                      </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 25rem; height:100%">
                        <img src="{{asset('dokter/img/3.jpg')}}" class="card-img-top" alt="2">
                        <div class="card-body">
                          <h5 class="card-title">DR. dr. Dewi A Wisnumurti, Sp.A(K)</h5>
                          <p class="card-text">DR. dr. Dewi A Wisnumurti, Sp.A(K) adalah dokter spesialis anak.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">
                                Detail
                            </button>      
                            <!-- Modal -->
                            <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="modal1Label">DR. dr. Dewi A Wisnumurti, Sp.A(K)</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Layanan kesehatan yang dapat beliau berikan berupa konsultasi penyakit dan gangguan pada anak. Jam Layanan rabu-Kamis Pukul 09.00-11.00
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    
                                    </div>
                                </div>
                                </div>
                            </div>   
                        </div>
                      </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 25rem; height:100%">
                        <img src="{{asset('dokter/img/4.jpg')}}" class="card-img-top" alt="2">
                        <div class="card-body">
                          <h5 class="card-title">dr. Ari Hidayat, Sp.OG (K)</h5>
                          <p class="card-text">dr. Ari Hidayat, Sp.OG (K) adalah dokter spesialis kebidanan.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal2">
                                Detail
                            </button>      
                            <!-- Modal -->
                            <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="modal2Label">dr. Ari Hidayat, Sp.OG (K)</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Layanan kesehatan yang dapat beliau berikan berupa konsultasi dan melahirkan. Jam Layanan jumat-sabtu Pukul 09.00-11.00
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    
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
