@extends('layout.master2')
<style>
  footer{
    position: fixed;
    bottom: 0;
    width: 100%;
  }
</style>
@section('content')
<div class="container mt-5 pt-5">
  <div class="card shadow">
    <div class="card-header text-center">Silahkan Pilih gejala yang sesuai</div>
    <div class="card-body">
      <form action="">
          <div class="row">
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Demam</label>
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Demam</label>
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Demam</label>
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Demam</label>
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Demam</label>
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Demam</label>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Demam</label>
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Demam</label>
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Demam</label>
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Demam</label>
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Demam</label>
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Demam</label>
              </div>
            </div>
          </div>
        </form>
        <div>
          <button class="btn btn-primary mt-3" onclick="window.location.href='/hasil'">SUBMIT</button>
        </div>
    </div>
    </div>
</div>

@endsection