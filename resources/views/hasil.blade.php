@extends('layout.master2')
<link rel="stylesheet" href="{{ url('css/hasil.css') }}">
@section('content')
<div class="container mb-5 hasil" id="hide">
  <div class="card border-0 shadow-lg">
    <div class="card-body p-3">
      <h5 class="card-title text-center">Hasil Diagnosa</h5>
      <hr>
      <div class="mb-2">
        <table class="table table-striped-columns">
          <thead>
            <tr>
              <th scope="col">Nama Penyakit</th>
              <th scope="col">Kepastian(CF)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Demam</td>
              <td>87%</td>
            </tr>
          </tbody>
        </table>
      </div>
      <hr>
      <div class="mb-2 mt-2">
        <table class="table table-striped-columns">
          <thead>
            <tr>
              <th colspan="2">Berdasarkan Data yang Telah Dimasukkan, maka solusi dari sistem adalah:</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="col">Solusi</th>
              <td scope="col">
                <ol>
                  <li>Banyak istirahat</li>
                  <li>jangan merokok</li>
                  <li>jangan tidur larut malam</li>
                </ol>
              </td>
            </tr>
            <tr>
              <th scope="row">Saran Obat</th>
              <td>
                <ul>
                  <li>p</li>
                  <li>p</li>
                  <li>p</li>
                </ul>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection