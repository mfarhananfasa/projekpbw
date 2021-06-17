@extends('template')
@section('title','Home')

@section('isi')
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
        <div class="row">
            <div class="col-xl-6">
            <h1>websites Praktek Dokter</h1>
            <h2>Website untuk mengatur jadwal temu dengan dokter</h2>

            @auth
                <a href="{{ url('pasien') }}" class="btn-get-started">Atur jadwal</a>
            @endauth
            @guest
            <a href="{{ url('register') }}" class="btn-get-started btn-primary">Buat Akun</a>
            @endguest
            </div>

            <div class="col-xl-6 .ms-auto">
            <h2>Schedule</h2>
            <table class="table table-primary table-striped text-center">
                <div class="container">
                <thead>
                    <tr>
                    <th scope="col">No antrian</th>
                    <th scope="col">Nama</th>
                    <th scope="col">jadwal</th>
                    </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($times as $time)
                        @if ($time->id_users > 0)
                            @forelse ($data as $pasien)
                                @if ( $pasien->id == $time->id_users )
                                    <tr>
                                        <th scope="row">{{ $time->id}}</th>
                                        <td>{{ $pasien->nama }}</td>
                                        <td>{{ $time->waktu }}</td>
                                    </tr>
                                @endif
                            @empty

                            @endforelse
                        @else
                            <tr>
                                <th scope="row">{{ $time->id}}</th>
                                <td>-</td>
                                <td>{{ $time->waktu }}</td>
                            </tr>
                        @endif
                    @empty
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforelse
                </tbody>
                </div>
            </table>
            </div>

        </div>
        </div>
    </section>
@endsection
