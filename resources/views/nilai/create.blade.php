@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>TAMBAH DATA NILAI</h2>

            <form action="/nilai/store" method="post">
                @csrf
                <table width="50%">
                    <tr>
                        <td class="bar">Guru Mapel</td>
                        <td class="bar">
                            <select name="mengajar_id" id="">
                                <option value=""></option>
                                @foreach ($mengajar as $m)
                                    <option value="{{ $m->id }}">{{ $m->mapel->nama_mapel }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="bar">Siswa</td>
                        <td class="bar">
                            <select name="siswa_id" id="">
                                <option value=""></option>
                                @foreach ($siswa as $s)
                                    <option value="{{ $s->id }}">{{ $s->nama_siswa }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="bar">Ulangan Harian</td>
                        <td class="bar"><input type="number" name="uh"></td>
                    </tr>
                    <tr>
                        <td class="bar">Ujian Tengah Semester</td>
                        <td class="bar"><input type="number" name="uts"></td>
                    </tr>
                    <tr>
                        <td class="bar">Ujian Akhir Semester</td>
                        <td class="bar"><input type="number" name="uas"></td>
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
