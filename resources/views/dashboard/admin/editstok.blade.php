<!doctype html>
<html lang="en">
  
  
  
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN</title>

   <!-- core css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">>
    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/chart pie.css">
  </head>
  <body>

    @include('dashboard.layouts.header')
    

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="container-fluid">
  <div class="row">
   @include('dashboard.layouts.sidebar')
   @yield('container')
      

   <h1 class="h3 mb-3 fw-normal"><br>Update Data Menu Cafe<br></h1>
   <form action="/ubahstok/{{ $barang->id }}" method="POST">
  
    @csrf
    
    
  <div class="form-floating">
    <input type="text" name="kode_barang" class="form-control @error('kode_barang')is-invalid @enderror" id="kode_barang" placeholder="kode_barang" required value="{{ $barang->kode_barang}}" >
    <label for="kode_barang">Kode Barang</label>
    @error('kode_barang')
    <div class ="invalid-feedback">
      {{ $message }}
    </div> 
    @enderror
  </div >
  

  <div class="form-floating">
    <input type="text" name="nama_barang" class="form-control @error('nama_barang')is-invalid @enderror" id="nama_barang" placeholder="nama_barang" required value="{{ $barang->nama_barang }}">
    <label for="nama_barang">Nama Barang</label>
    @error('nama_barang')
    <div class ="invalid-feedback">
      {{ $message }}
    </div> 
    @enderror
  </div >

  <div class="form-floating">
    <input type="text" name = "harga_barang" class="form-control @error('harga_barang')is-invalid @enderror" id="harga_barang" placeholder="harga_barang"required value="{{ $barang->harga_barang }}">
    <label for="harga_barang">Harga Barang</label>
    @error('harga_barang')
    <div class ="invalid-feedback">
      {{ $message }}
    </div> 
    @enderror
  </div>

  <div>
  <button class=" sumfontedit btn btn-info" type="submit">Simpan</button>
  </div>

  </div>
</div>

</main>
