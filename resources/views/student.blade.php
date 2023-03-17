{{-- @include('layout.header',['title' => 'Data Mahasiswa' ]) --}}
@extends('layout.master')
@section('title', 'Data Mahasiswa')
@section('menuMahasiswa', 'active')

@section('content')
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 style="color:darkgreen">Data Mahasiswa</h1>
      <div class="row">
        <div class="col-sm-8 col-md-6 m-auto">
            <ol class="list-group">
                @forelse ($student as $val)
                    <li class="list-group-item">{{ $val }}</li>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak Ada data...</div>
                @endforelse
            </ol>
        </div>
      </div>
    </div>

@endsection
{{-- @include('layout.footer') --}}