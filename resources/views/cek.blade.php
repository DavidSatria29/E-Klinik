@extends('layout.master2')
<link rel="stylesheet" href="{{url('css/cek.css')}}">
@section('content')
<div class="bg-img">
    <div class="content">
        <div class="wrapper">
            <div class="inner">
                <form action="">
                    <center>
                    <h1>Gejala Penyakit</h1>
                    </center>
                    <div class="form-holder">
                        <span class="lnr lnr-user"></span>
                        <input type="text" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-holder">
                        <span class="lnr lnr-phone-handset"></span>
                        <input type="text" class="form-control" placeholder="Umur">
                    </div>
                    <div class="form-holder">
                        <span class="lnr lnr-lock"></span>
                        <select name="" id="">
                            <option> Panas</option>
                            <option> Pusing</option>
                            <option> Batuk</option>
                            <option> Pilek</option>
                            <option> Tifus</option>
                            <option> Cacar Air</option>
                            <option> Influenza</option>
                            <option> Hepatitis</option>
                    </select>
                    </div>
                    <center>
                        <button type="button" class="btn btn-primary">
                            <a href="Hasil.html">Submit</a>						
                        </button>
                    </center>
                </form>
            </div>			
        </div>
    </div>
</div>

@endsection