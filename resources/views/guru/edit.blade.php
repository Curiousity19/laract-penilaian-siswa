@extends('main.layout')
@section('content')
    
    <center>
        <br>
        <h2>TAMBAH DATA GURU</h2>

        <form method="post" action="/guru/update/{{ $guru->id }}">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NIP</td>
                    <td class="">
                        <input type="text" name="nip" value="{{ $guru->nip }}">
                    </td>
                </tr>
                <tr>
                    <td class="bar">Nama Guru</td>
                    <td class="">
                        <input type="text" name="nama_guru" value="{{ $guru->nama_guru }}">
                    </td>
                </tr>
                <tr>
                    <td class="bar">Jenis Kelamin</td>
                    <td class="">
                        <input type="radio" name="jk" value="L" {{ $guru->jk == 'L' ? 'checked' : ''}}>Laki-laki
                        <input type="radio" name="jk" value="P" {{ $guru->jk == 'P' ? 'checked' : ''}}>Perempuan
                    </td>
                </tr>
                <tr>
                    <td class="bar">Alamat</td>
                    <td class="">
                        <textarea name="alamat" cols="30" rows="10">{{ $guru->alamat }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Password</td>
                    <td class="">
                        <input type="password" name="password" value="{{ $guru->password }}">
                    </td>
                </tr>
                <tr>
                    <th colspan="2" text="center">
                        <button type="submit">SIMPAN</button>
                    </th>
                </tr>
            </table>
        </form>
    </center>
@endsection

