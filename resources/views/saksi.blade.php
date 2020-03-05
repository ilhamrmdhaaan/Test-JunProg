@extends('buku/tf')

@section('title', 'Transaksi')

@section('sidebar')
<div class="sidebar">
  <a class="" href="{{ url('/buku') }}">List Buku</a>
  <a class="" href="{{ url('/') }}">List Sewa Aktif</a>
  <a class="active" href="{{ url('/tf') }}">Transaksi</a>
  <a class="" href="{{ url('/') }}">History</a>
  <hr style="border:1px solid #000;">
  <a class="active" href="#">Admin</a>
  <a class="" href="{{ url('/') }}">Data Penyewa</a>
  <a class="" href="{{ url('/') }}">Buku</a>
</div>
@endsection

@section('container')
<div class="container">
  <div class="row mt-4">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h3>Transaksi</h3>
          <form action="">
             <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Penyewa</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="#">
              </div>
            </div>
          
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">No Hp</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" id="#">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-4">
              <textarea id="" name="" placeholder="Masukkan Alamat.." style="height:200px"></textarea>
              </div>
            </div>
            
            <div class="form-group col-md-4">
              <label for="">Data Buku</label>
              <select id="" class="form-control">
                <option selected>Pilih Judul Buku</option>
                <option value="Judul Buku 1">Judul Buku 1</option>
              </select>
            </div>

             <div class="form-group col-md-4">
              <select id="" class="form-control">
                <option selected>Pilih Judul Buku</option>
                <option value="Judul Buku 2">Judul Buku 2</option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <select id="" class="form-control">
                <option selected>Pilih Buku</option>
                <option value="Pilih Buku">Pilih Buku </option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <select id="" class="form-control">
                <option selected>Pilih Buku</option>
                <option value="Pilih Buku">Pilih Buku </option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <select id="" class="form-control">
                <option selected>Pilih Buku</option>
                <option value="Pilih Buku">Pilih Buku </option>
              </select>
            </div>
            <button type="button" class="btn btn-outline-primary">Submit</button>
          </form>



        </div>
      </div>
    </div>
  </div>
</div>
@endsection