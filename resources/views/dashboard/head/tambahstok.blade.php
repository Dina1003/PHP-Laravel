@extends('dashboard.head.stok')

@section('container')

<main class="form-signin1 w-100 " >
   <form action="/tambahstok" method="POST">
    @csrf
  <div class="form-floating">
    <input type="text" name="kode_barang" class="form-control @error('kode_barang')is-invalid @enderror" id="kode_barang" placeholder="kode_barang" required value="{{ old('kode_barang') }}">
    <label for="kode_barang">Kode Barang</label>
    @error('kode_barang')
    <div class ="invalid-feedback">
      {{ $message }}
    </div> 
    @enderror
  </div >
  

  <div class="form-floating">
    <input type="text" name="nama_barang" class="form-control @error('nama_barang')is-invalid @enderror" id="nama_barang" placeholder="nama_barang" required value="{{ old('nama_barang') }}">
    <label for="nama_barang">Nama Barang</label>
    @error('nama_barang')
    <div class ="invalid-feedback">
      {{ $message }}
    </div> 
    @enderror
  </div >

  <div class="form-floating">
    <input type="text" name = "harga_barang" class="form-control @error('harga_barang')is-invalid @enderror" id="harga_barang" placeholder="harga_barang"required value="{{ old('harga_barang') }}">
    <label for="harga_barang">Harga Barang</label>
    @error('harga_barang')
    <div class ="invalid-feedback">
      {{ $message }}
    </div> 
    @enderror
  </div>

  <button class="w-100 btn btn-lg btn-primary" type="submit">Tambah</button>

  
</main>
@endsection
