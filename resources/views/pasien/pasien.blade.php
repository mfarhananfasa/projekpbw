@extends('template')
@section('title','Pasien')

@section('isi')
    <section>

        <div class="col-md-8 mt-5 ms-4">
        <h1>Tabel Pasien</h1>

        <form method="GET" action="/pasien" class="d-flex col-md-7 mb-3 mt-3">
            <input name="search" class="form-control me-2" type="text" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <table class="table table-primary table-striped text-center">
            <div class="container">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jadwal</th>
                </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $pasien)
                    @if ($pasien->id_times > 0)
                        <tr>
                            <th scope="row">{{ $pasien->id }}</th>
                            <td>{{ $pasien->nama }}</td>
                            <td>{{ $pasien->umur }}</td>
                            <td>{{ $pasien->alamat }}</td>
                            @forelse ($times as $time)
                                @if ($time->id_users == $pasien->id)
                                    <td>{{ $time->waktu }}</td>
                                @endif
                            @empty

                            @endforelse
                        </tr>
                    @endif
                @empty

                @endforelse
            </tbody>
            </div>
        </table>
        </div>
    </section>
    @endsection
