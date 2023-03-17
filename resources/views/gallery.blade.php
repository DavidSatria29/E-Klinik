{{-- @include ('layout.header', ['title'=> 'Gallery' ]) --}}
@extends('layout.master')
@section('title', 'Gallery')
@section('menuGallery', 'active')

@section('content')
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 style="color:darkgreen">Gallery</h1>
      <div class="row mb-4">
        <div class="col-4">
            <img src="{{ asset('picture\Picture1.jpg') }}" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4">
            <img src="{{ asset('picture\Picture2.jpg') }}" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4">
            <img src="{{ asset('picture\Picture3.jpg') }}" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4 mt-4">
            <img src="{{ asset('picture\Picture4.jpg') }}" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4 mt-4">
            <img src="{{ asset('picture\Picture5.jpg') }}" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4 mt-4">
            <img src="{{ asset('picture\Picture6.jpg') }}" class="img-thumbnail img-fluid">
        </div>
            
        </div>
      </div>
    </div>

@endsection

{{-- @include('layout.footer') --}}