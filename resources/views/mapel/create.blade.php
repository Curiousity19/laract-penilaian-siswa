@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>Tambah Data Mapel</h2>
            <form action="/mapel/store" method="post">
                @csrf
                <table>
                    <tr>
                        <td>Nama Mapel</td>
                        <td><input type="text" name="nama_mapel"></td>
                    </tr>
                    <tr>
                        <td><button type="submit">Simpan</button></td>
                    </tr>
                </table>
            </form>
        </b>
    </center>
@endsection