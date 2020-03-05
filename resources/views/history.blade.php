@extends('buku/report')

@section('title', 'Report')

@section('sidebar')
<div class="sidebar">
  <a class="active" href="{{ url('/buku') }}">List Buku</a>
  <a class="" href="{{ url('/') }}">List Sewa Aktif</a>
  <a class="" href="{{ url('/saksi') }}">Transaksi</a>
  <a class="" href="{{ url('/') }}">History</a>
  <hr style="border:1px solid #000;">
  <a class="active" href="#">Admin</a>
  <a class="" href="{{ url('/data') }}">Data Penyewa</a>
  <a class="" href="{{ url('/') }}">Buku</a>
</div>
@endsection

@section('container')
<div class="container">
  <div class="row mt-4">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h3 style="margin-bottom: 20px;">History Buku</h3>
          <table id="coba" class="display nowrap" style="100%">
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
                  @foreach($cover as $cr)
                  <tr>
                    <td></td>
                    <td>{{ $cr->id_buku }}</td>
                    <td>{{ $cr->judul_buku }}</td>
                    <td>{{ $cr->kategori }}</td>
                    <td>{{ $cr->hrg_sewa }}</td>
                  </tr>
                  @endforeach
                </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection