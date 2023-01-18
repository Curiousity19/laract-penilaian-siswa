@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>TAMBAH DATA MENGAJAR</h2>
            <form action="/mengajar/store" method="post">
                @csrf
                <table width="50%">
                    <tr>
                        <td>Nama Guru</td>
                        <td>
                            <select name="guru_id" id="">
                                <option value=""></option>
                                @foreach ($guru as $g)
                                    <option value="{{ $g->id }}">{{ $g->nama_guru }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Mapel</td>
                        <td>
                            <select name="mapel_id" id="">
                                <option value=""></option>
                                @foreach ($mapel as $m)
                                    <option value="{{ $m->id }}">{{ $m->nama_mapel }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Kelas</td>
                        <td>
                            <select name="kelas_id" id="">
                                <option value=""></option>
                                @foreach ($kelas as $k)
                                    <option value="{{ $k->id }}">{{ $k->nama_kelas." ".$k->jurusan->nama_jurusan }}</option>
                                @endforeach
                            </select>
                        </td>
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
