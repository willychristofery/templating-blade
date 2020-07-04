@extends('adminlte.master')

@section('content')

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Jawaban</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/jawaban" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" id="isi" name="isi" placeholder="isi">
                  </div>
                  <div class="form-group">
                    <label for="pertanyaan_id">Id Pertanyaan</label>
                    <input type="text" class="form-control" id="pertanyaan_id" name="pertanyaan_id">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

@endsection