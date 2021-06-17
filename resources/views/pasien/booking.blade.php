@extends('template')
@section('title','Pasien')

@section('isi')
    <section>

        <div class="col-md-8 mt-5 ms-4">
        <h1>Booking Jadwal</h1>

        <table class="table table-primary table-striped text-center">
            <div class="container">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Alamat</th>
                <th scope="col">Pilihan Jadwal</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">{{ $data->id }}</th>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->umur }}</td>
                <td>{{ $data->alamat }}</td>
                <form action="/booking" method="post">
                    @csrf
                <td>
                    <select name="jadwal">
                        @forelse ($times as $time)
                            @if ($time->id_users == 0)
                                <option value="{{ $time->id }}">{{ $time->waktu }}</option>
                            @endif
                        @empty
                            Data tidak tersedia
                        @endforelse
                    </select>
                </td>
                <td><button class="btn btn-primary" type="submit" name="button">Booking!</button></td>
                </form>
                </tr>
            </tbody>
            </div>
        </table>
        </div>
    </section>
    @endsection
