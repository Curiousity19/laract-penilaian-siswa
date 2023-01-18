@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>TAMBAH DATA NILAI</h2>

            <form action="/nilai/store" method="post">
                @csrf
                <table width="50%">
                </table>
            </form>
        </b>
    </center>
@endsection
