@extends('layouts.master')

@section('title')
Halaman Detail
@endsection

@section('content')

<h1>{{ $cast->nama }}</h1>
<p>{{ $cast->bio }}</p>

<a href="/cast" class="btn btn-secondary btn-sm">kembali</a>

@endsection