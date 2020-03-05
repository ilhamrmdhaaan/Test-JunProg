@extends('layouts/main')

@section('title', 'Home')

@section('sidebar')
<div class="sidebar">
  <a class="active" href="{{ url('/buku') }}">List Buku</a>
  <a class="" href="{{ url('/') }}">List Sewa Aktif</a>
  <a class="" href="{{ url('/saksi') }}">Transaksi</a>
  <a class="" href="{{ url('/history') }}">History</a>
  <hr style="border:1px solid #000;">
  <a class="active" href="#">Admin</a>
  <a class="" href="{{ url('/data') }}">Data Penyewa</a>
  <a class="" href="{{ url('/') }}">Buku</a>
</div>
@endsection