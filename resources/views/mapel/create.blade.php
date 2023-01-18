@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>TAMBAH DATA MAPEL</h2>
            <form action="/mapel/store" method="post">
                @csrf
                <table width="50%">
                    <tr align="center">
                        <td>Nama Mapel</td>
                        <td><input type="text" name="nama_mapel"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center><button type="submit" class="button-primary">Simpan</button></center>
                        </td>
                    </tr>
                </table>
            </form>
        </b>
    </center>
@endsection