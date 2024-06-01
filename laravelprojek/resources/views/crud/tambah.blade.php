@extends('layouts.master')

@section('title')
Halaman tambah
@endsection

@section('content')
<div class="new">
    <a href="/cast" class="button1 btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Kembali</a>
</div></br>
<form method="POST" action="/cast">
    {{-- Validasi --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- Input Form --}}
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Nama :</label>
      <input type="text" class="form-control" name="nama" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label>Umur : </label> <br> 
        <input type="number" name="umur" min="7" max="80" class="form-control"> 
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Bio :</label>
        <textarea name="bio" class="form-control" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection