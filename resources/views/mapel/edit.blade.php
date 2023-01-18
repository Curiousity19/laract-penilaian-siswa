@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>EDIT DATA MAPEL</h2>
            <form action="/mapel/update/{{ $mapel->id }}" method="post">
                @csrf
                <table width="50%">
                    <tr align="center">
                        <td>Nama Mapel</td>
                        <td><input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center><button type="submit" class="button-primary">UBAH</button></center>
                        </td>
                    </tr>
                </table>
            </form>
        </b>
    </center>
@endsection