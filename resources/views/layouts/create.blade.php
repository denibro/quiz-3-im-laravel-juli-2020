@extends('layouts.master')


@section('content')
<div class="ml-2 mt-2">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><MAIN>PROYEK</MAIN></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_proyek">nama proyek</label>
                    <input type="text" class="form-control" id="nama_proyek" placeholder="Enter nama_proyek" name="nama_proyek" value="{{ old('nama_proyek','') }}">
                    @error('nama_proyek')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="deskripsi proyek">deskripsi proyek</label>
                    <input type="text" class="form-control" id="deskripsi proyek" placeholder="Enter deskripsi proyek" name="deskripsi proyek" value="{{ old('deskripsi proyek','') }}">
                    @error('deskripsi proyek')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="tanggal mulai">tanggal mulai</label>
                    <input type="text" class="form-control" id="tanggal mulai" placeholder="Enter tanggal mulai" name="tanggal mulai" value="{{ old('tanggal mulai','') }}">
                    @error('tanggal mulai')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="tanggal deadline">tanggal deadline</label>
                    <input type="text" class="form-control" id="tanggal deadline" placeholder="Enter tanggal deadline" name="tanggal deadline" value="{{ old('tanggal deadline','') }}">
                    @error('tanggal deadline')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="status">status</label>
                    <input type="text" class="form-control" id="status" placeholder="Enter status" name="status" value="{{ old('status','') }}">
                    @error('status')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>
              </form>
    </div>    
      </div>
		
@endsection