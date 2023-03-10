@extends('main.layout')
@section('content')
    
    <center>
        <br>
        <h2>TAMBAH DATA SISWA</h2>

        <form method="post" action="/siswa/store">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NIS</td>
                    <td class="">
                        <input type="text" name="nis">
                    </td>
                </tr>
                <tr>
                    <td class="bar">Nama Siswa</td>
                    <td class="">
                        <input type="text" name="nama_siswa">
                    </td>
                </tr>
                <tr>
                    <td class="bar">Jenis Kelamin</td>
                    <td class="">
                        <input type="radio" name="jk" value="L">Laki-laki
                        <input type="radio" name="jk" value="P">Perempuan
                    </td>
                </tr>
                <tr>
                    <td class="bar">Alamat</td>
                    <td class="">
                        <textarea name="alamat" cols="30" rows="10"></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Kelas</td>
                    <td class="">
                        <select name="kelas_id" id="">
                            <option value=""></option>
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kelas." ".$k->jurusan->nama_jurusan }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Password</td>
                    <td class="">
                        <input type="password" name="password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" text="center">
                        <center><button type="submit" class="button-primary">SIMPAN</button></center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
@endsection

