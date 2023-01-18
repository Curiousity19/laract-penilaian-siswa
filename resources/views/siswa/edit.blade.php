@extends('main.layout')
@section('content')
    
    <center>
        <br>
        <h2>TAMBAH DATA SISWA</h2>

        <form method="post" action="/siswa/update/{{ $siswa->id }}">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NIS</td>
                    <td class="">
                        <input type="text" name="nis" value="{{ $siswa->nis }}">
                    </td>
                </tr>
                <tr>
                    <td class="bar">Nama Siswa</td>
                    <td class="">
                        <input type="text" name="nama_siswa" value="{{ $siswa->nama_siswa }}">
                    </td>
                </tr>
                <tr>
                    <td class="bar">Jenis Kelamin</td>
                    <td class="">
                        <input type="radio" name="jk" value="L" {{ $siswa->jk == 'L' ? 'checked' : '' }}>Laki-laki
                        <input type="radio" name="jk" value="P" {{ $siswa->jk == 'P' ? 'checked' : ''}}>Perempuan
                    </td>
                </tr>
                <tr>
                    <td class="bar">Alamat</td>
                    <td class="">
                        <textarea name="alamat" cols="30" rows="10">{{ $siswa->alamat }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Kelas</td>
                    <td class="">
                        <select name="kelas_id" id="">
                            <option value=""></option>
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id }}" {{ $k->id == $siswa->kelas_id ? 'selected' : '' }}>{{ $k->nama_kelas." ".$k->jurusan->nama_jurusan }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Password</td>
                    <td class="">
                        <input type="password" name="password" value="{{ $siswa->password }}">
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

