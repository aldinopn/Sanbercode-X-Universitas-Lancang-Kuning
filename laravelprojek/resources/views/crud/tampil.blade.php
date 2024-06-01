@extends('layouts.master')

@section('title')
Halaman Tampil
@endsection

@section('content')



<table id="example1" class="table table-bordered table-striped">
   <thead>
    <div class="text-right mb-4">
        <a href="/cast/create" class="btn btn-info" title="Tambah Cast Baru">+ Tambah</a>
    </div>
                             
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Bio</th>
            <th>Aksi</th>
        </tr>
        </thead>
    <tbody>
        @forelse ($cast as $key => $value)
        <tr>
            <td style="font-weight: bold">{{ $key+1 }}</td>
            <td style="font-weight: bold">{{ $value->nama }}</td>
            <td style="font-weight: bold">{{ $value->umur }}</td>
            <td style="font-weight: bold">{{ $value->bio }}</td>
            <td>
                <a href="/cast/{{$value->id}}" class="btn btn-warning btn-sm">
                    <i class="fas fa-eye"></i>
                </a>
                <a href="/cast/{{ $value->id }}/edit" class="btn btn-info btn-sm">
                    <i class="fa fa-pen" aria-hidden="true"></i>
                </a>
                <form action="/cast/{{ $value->id }}" method="POST" class="d-inline" onsubmit="return confirm('Serius kamu....,Yang bener...?')">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger btn-sm"><i class="fa fa-eraser" aria-hidden="true"></i></button>
                </form>
            </td>
        </tr>
     </tr>
     @empty     
     Isi dulu dong,yang bener aja     
     @endforelse
    </tbody> 
</table>
@endsection