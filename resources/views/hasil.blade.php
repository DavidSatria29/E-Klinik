@extends('layout.master2')
@section('content')
<div class="wrapper">
    <div class="inner">
        <center>
            <h1>Hasil Diaknosa</h1>
            <h2>Penyakit</h2>
        </center>
        
            <div class="container text-center">
                <div class="row row-cols-2">
                  <div class="col">
                    <table>
                    <tr>
                        <td>Nilai Kepastian</td>
                        <td>:</td>
                        <td><input type="text" name="" placeholder="%"/></td>
                    </tr>
                  </div>
                  <div class="col">
                    <tr>
                        <td>Solusi</td>
                        <td>:</td>
                        <td><input type="text" name=""/></td>
                    </tr>
                  </div>
                  <div class="col">
                    <tr>
                        <td>Obat</td>
                        <td>:</td>
                        <td><input type="text" name=""/></td>
                  </div>
                </div>
                      </div>
            <center>
              <button>BACK</button>
            </center>
    </div>
    <img src="images/image-2.png" alt="" class="image-2">
</div>


@endsection