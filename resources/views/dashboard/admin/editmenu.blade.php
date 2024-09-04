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
      

   <h1 class="h3 mb-3 fw-normal">Update Data Menu Cafe</h1>
   <form action="/updatemenu/{{ $menu->id }}" method="POST">
  
    @csrf
    
  <div class="form-floating">
    <input type="text" name="kode_menu" class="form-control @error('kode_menu')is-invalid @enderror" id="kode_menu" placeholder="kode_menu" required value="{{ $menu->kode_menu}}" >
    <label for="kode_menu">Kode Menu</label>
    @error('kode_menu')
    <div class ="invalid-feedback">
      {{ $message }}
    </div> 
    @enderror
  </div >
  

  <div class="form-floating">
    <input type="text" name="nama_menu" class="form-control @error('nama_menu')is-invalid @enderror" id="nama_menu" placeholder="nama_menu" required value="{{ $menu->nama_menu }}">
    <label for="nama_menu">Nama Menu</label>
    @error('nama_menu')
    <div class ="invalid-feedback">
      {{ $message }}
    </div> 
    @enderror
  </div >

  <div class="form-floating">
    <input type="text" name = "harga" class="form-control @error('harga')is-invalid @enderror" id="harga" placeholder="harga"required value="{{ $menu->harga }}">
    <label for="harga">Harga Menu</label>
    @error('harga')
    <div class ="invalid-feedback">
      {{ $message }}
    </div> 
    @enderror
  </div>

  <button class="w-100 btn btn-lg btn-primary" type="submit">Update Menu</button>
  <small class ="d-block text-center ms-4"> 
    <a href = "/dashboard"> Dashboard</small>

  </div>
</div>
</main>
