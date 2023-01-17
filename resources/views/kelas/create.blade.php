@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>Tambah Data Kelas</h2>
            <form action="/kelas/store" method="post">
                @csrf
                <table width="50%">
                    <tr>
                        <td class="bar">Kelas</td>
                        <td><input type="text" name="nama_kelas"></td>
                    </tr>
                    <tr>
                        <td class="bar">Jurusan</td>
                        <td>
                            <select name="jurusan_id" id="">
                                <option value=""></option>
                                @foreach ($jurusan as $j)
                                    <option value="{{ $j->id }}">{{ $j->nama_jurusan }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center><button type="submit" class="button-primary">SIMPAN</button></center>
                        </td>
                    </tr>
                </table>
            </form>
        </b>
    </center>
@endsection