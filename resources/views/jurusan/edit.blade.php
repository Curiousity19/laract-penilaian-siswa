@extends('main.layout')
@section('content')
    <center>
        <h2>UBAH DATA JURUSAN</h2>
        <form action="/jurusan/update/{{ $jurusan->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">JURUSAN</td>
                    <td class="bar"><input type="text" value="{{ $jurusan->nama_jurusan }}" name="nama_jurusan"></td>
                </tr>
                <tr>
                    <td colspan="2"><center><button type="submit" class="button-primary">UBAH DATA</button></center></td>
                </tr>
            </table>
        </form>
    </center>
@endsection
