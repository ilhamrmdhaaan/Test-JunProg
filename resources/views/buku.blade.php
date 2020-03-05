@extends('buku/list')


@section('title', 'List Buku')


@section('sidebar')
<div class="sidebar">
  <a class="active" href="{{ url('/buku') }}">List Buku</a>
  <a class="" href="{{ url('/') }}">List Sewa Aktif</a>
  <a class="" href="{{ url('/') }}">Transaksi</a>
  <a class="" href="{{ url('/history') }}">History</a> 
  <hr style="border:1px solid #000;">
  <a class="active" href="#">Admin</a>
  <a class="" href="{{ url('/data') }}">Data Penyewa</a>
  <a class="" href="{{ url('/') }}">Buku</a>
</div>
@endsection

@section('container')
<div class="container">
  <div class="row mt-5">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4>List Buku</h4>
          <a href="{{ url('/data') }}" type="button" class="btn btn-outline-primary">Tambah</a>
          <a type="button" class="btn btn-outline-danger" onclick="iseng()">Hapus</a>
         <div class="table mt-4">
           <div class="row">
             <div class="col-12">
               <table id="coba" class="display" style="width: 100%">
                <thead>
                  <tr>
                      <th></th>
                      <th>Id_Buku</th>
                      <th>Judul_Buku</th>
                      <th>Kategori</th>
                      <th>Harga_Sewa</th>
                  </tr>
                </thead> 
                <tbody>
                  @foreach($buku as $bk)
                  <tr>
                    <td></td>
                    <td>{{ $bk->id_buku }}</td>
                    <td>{{ $bk->judul_buku }}</td>
                    <td>{{ $bk->kategori }}</td>
                    <td>{{ $bk->hrg_sewa }}</td>
                  </tr>
                  @endforeach
                </tbody>
               </table>
             </div>
           </div>
         </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection