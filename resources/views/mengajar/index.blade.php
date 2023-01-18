@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST DATA MENGAJAR</h2>
            <a href="/mengajar/create" class="button-primary">TAMBAH DATA MENGAJAR</a>
            @if (session('success'))
                <p class="text-success">{{ session('success') }}</p>
            @endif
            @if(session('error'))
                <p class="text-danger">{{ session('error') }}</p>
            @endif

            <table cellpadding="10">
                <tr>
                    <th>NO</th>
                    <th>NAMA GURU</th>
                    <th>MATA PELAJARAN</th>
                    <th>KELAS</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($mengajar as $m)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $m->guru->nama_guru }}</td>
                        <td>{{ $m->mapel->nama_mapel }}</td>
                        <td>{{ $m->kelas->nama_kelas." ".$m->kelas->jurusan->nama_jurusan }}</td>
                        <td>
                            <a href="/mengajar/edit/{{ $m->id }}" class="button-warning">Edit</a>
                            <a href="/mengajar/destroy/{{ $m->id }}" class="button-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </b>
    </center>    
@endsection
