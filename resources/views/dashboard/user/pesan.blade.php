<!doctype html>
<html lang="en">
  
  
  
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WAITER</title>

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
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/waiter">
              <span data-feather="home" class="align-text-bottom"></span>
              💡 Waiter Time 
            </a>
            <a class="nav-link active" aria-current="page" href="/transaksi">
              <span data-feather="home" class="align-text-bottom"></span>
              💵 Transaksi 
            </a>
          </li>
        </ul>
      </div>
    </nav>
   @yield('container')
      

   <h1 class="h3 mb-3 fw-normal">Input Pesanan Menu Cafe</h1>
   <form action="/orderpesanan/{{ $pesan->id }}" method="POST">
  
    @csrf
    
  

  <div class="form-floating">
    <input type="text" name="nama_menu" class="form-control @error('nama_menu')is-invalid @enderror" id="nama_menu" placeholder="nama_menu" required value="{{ $pesan->nama_menu }}">
    <label for="nama_menu">Nama Menu</label>
    @error('nama_menu')
    <div class ="invalid-feedback">
      {{ $message }}
    </div> 
    @enderror
  </div >

  <div class="form-floating">
    <input type="number" name = "harga_menu" class="form-control @error('harga_menu')is-invalid @enderror" id="harga_menu" placeholder="harga_menu"required value="{{ $pesan->harga }}">
    <label for="harga_menu">Harga Menu</label>
    @error('harga_menu')
    <div class ="invalid-feedback">
      {{ $message }}
    </div> 
    @enderror
  </div>

  <div class="form-floating">
    <input type="number" name = "qty" class="form-control @error('qty')is-invalid @enderror" id="qty" placeholder="qty"required >
    <label for="qty">Jumlah Pesanan</label>
    @error('qty')
    <div class ="invalid-feedback">
      {{ $message }}
    </div> 
    @enderror
  </div>

  <button class="w-100 btn btn-lg btn-primary" type="submit">pesan</button>
  

  </div>
</div>
</main>
