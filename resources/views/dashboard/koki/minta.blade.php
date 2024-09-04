<!doctype html>
<html lang="en">
  
  
  
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CHEF</title>

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
            <a class="nav-link active" aria-current="page" href="/koki">
              <span data-feather="home" class="align-text-bottom"></span>
              💡 Koki 
            </a>
            <a class="nav-link active" aria-current="page" href="/req">
              <span data-feather="home" class="align-text-bottom"></span>
              💵 Request
            </a>
          </li>
        </ul>
      </div>
    </nav>
   @yield('container')
      

   <h1 class="h3 mb-3 fw-normal"><br>Request Bahan Dapur</h1>
   <form action="/req" method="POST">
  
    @csrf
    
  <div class="form-floating">
    <input type="text" name="kode_barang" class="form-control @error('kode_barang')is-invalid @enderror" id="kode_barang" placeholder="kode_barang" required value="{{ $data->kode_barang}}" >
    <label for="kode_barang">Kode Barang</label>
    @error('kode_barang')
    <div class ="invalid-feedback">
      {{ $message }}
    </div> 
    @enderror
  </div >
  

  <div class="form-floating">
    <input type="text" name="nama_barang" class="form-control @error('nama_barang')is-invalid @enderror" id="nama_barang" placeholder="nama_barang" required value="{{ $data->nama_barang }}">
    <label for="nama_barang">Nama Barang</label>
    @error('nama_barang')
    <div class ="invalid-feedback">
      {{ $message }}
    </div> 
    @enderror
  </div >

  <div class="form-floating">
    <input type="text" name = "jumlah_barang" class="form-control @error('jumlah_barang')is-invalid @enderror" id="jumlah_barang" placeholder="jumlah_barang"required value="{{ $data->jumlah_barang}}">
    <label for="jumlah_barang">Stok</label>
    @error('jumlah_barang')
    <div class ="invalid-feedback">
      {{ $message }}
    </div> 
    @enderror
  </div>
  <div class="form-floating">
    <input type="text" name = "req" class="form-control @error('req')is-invalid @enderror" id="req" placeholder="req"required >
    <label for="req">Request</label>
    @error('req')
    <div class ="invalid-feedback">
      {{ $message }}
    </div> 
    @enderror
  </div>

  <button class="w-100 btn btn-lg btn-primary" type="submit">Request</button>
</div>
</main>
