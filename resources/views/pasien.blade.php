@extends('template')
@section('title','Pasien')

@section('isi')
    <section>

        <div class="col-md-8 mt-5 ms-4">
        <h1>Tabel Pasien</h1>

        <form class="d-flex col-md-7 mb-3 mt-3">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
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
                <th scope="col">Pilihan Jadwal</th>
                </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">78</th>
                <td>Hasan</td>
                <td>30</td>
                <td>Lampineung</td>
                <td>
                    <select name="jadwal">
                    <option>Pilih jadwal</option>
                    <option value="jwl1">10.00-10.15</option>
                    <option value="j2l2">10.15-10.30</option>
                    <option value="jwl3">10.30-10.45</option>
                    <option value="jwl4">10.45-11.00</option>
                    </select>
                </td>
                </tr>
                <tr>
                <th scope="row">20</th>
                <td>Siti</td>
                <td>45</td>
                <td>Peurada</td>
                <td>9.45-10.00</td>
                </tr>
                <tr>
                <th scope="row">65</th>
                <td>Kevin</td>
                <td>21</td>
                <td>Neusu</td>
                <td>9.30-9.45</td>


                </tr>
            </tbody>
            </div>
        </table>
        </div>
    </section>
    @endsection
