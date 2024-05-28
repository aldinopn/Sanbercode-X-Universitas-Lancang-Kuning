@extends('layouts.master')

@section('title')
Halaman Home
@endsection

@section('content')
    <h1>Selamat Datang {{ $fname }} {{ $lname }}</h1>
    <h3>Terima kasih Telah bergabung di SanberBook. Social Media kita bersama!</h3>
    <a href="/register">Kembali</a>
@endsection
  