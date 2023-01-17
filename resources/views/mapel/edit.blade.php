@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>Tambah Data Mapel</h2>
            <form action="/mapel/update/{{ $mapel->id }}" method="post">
                @csrf
                <table>
                    <tr>
                        <td>Nama Mapel</td>
                        <td><input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}"></td>
                    </tr>
                    <tr>
                        <td>
                            <center><button type="submit" class="button-primary">UBAH</button></center>
                        </td>
                    </tr>
                </table>
            </form>
        </b>
    </center>
@endsection