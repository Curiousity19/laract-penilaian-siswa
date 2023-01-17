@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>List Nama Kelas</h2>
            <a href="/kelas/create" class="button-primary">Tambah Nama Kelas</a>
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama Kelas</th>
                    <th>Jurusan</th>
                    <th>Action</th>
                </tr>
                @foreach ($kelas as $k)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $k->nama_kelas }}</td>
                        <td>{{ $k->jurusan->nama_jurusan }}</td>
                        <td>
                            <a href="/kelas/edit/{{ $k->id }}" class="button-warning">Edit</a>
                            <a href="/kelas/hapus/{{ $k->id }}" class="button-danger" onclick="return
                                confirm('Yakin Hapus?')">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </b>
    </center>
@endsection