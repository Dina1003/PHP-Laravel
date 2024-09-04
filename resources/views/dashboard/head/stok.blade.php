<!doctype html>
<html lang="en">
  
  
  
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HEAD KITCHEN</title>

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
 <main class="welcome row  col-ms-6 w-100 m-auto" >
  <div class="container-fluid">
    <div class="rps row ">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="head">
                <span data-feather="home" class="align-text-bottom"></span>
                📃 Stok Kitchen 
              </a>
           
                  
            </li>
          </ul>
        </div>
      </nav>
      @yield('container')

      <style>
        /* Style The Dropdown Button */
        .dropbtn {
          background-color: #F9E325;
          color: #000000;
          padding: 16px;
          font-size: 16px;
          border: none;
          cursor: pointer;
          border-radius: 36.5px;
        }
        
        /* The container <div> - needed to position the dropdown content */
        .dropdown {
          position: relative;
          display: inline-block;
        }
        
        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }
        
        /* Links inside the dropdown */
        .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }
        
        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {background-color: #f1f1f1}
        
        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
          display: block;
        }
        
        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
          background-color: #db81c8;
        }
        </style>

     

     <div>
      <h1 class="text-center tulisan"><br>Tambah Stok Dapur</h1>
        <div class="sumfont3 container">
          <form action="/Headtambahstok" method="POST">
            @csrf 

            <div class="row">
              <div class="col-sm-6">
                <div class="from-group">
                <input type="text" name="kode_barang" class="form-control @error('kode_barang')is-invalid @enderror" id="kode_barang" placeholder="kode_barang" required value="{{ old('kode_barang') }}">
                </div><br>
                <div class="from-group">
                <input type="text" name="nama_barang" class="form-control @error('nama_barang')is-invalid @enderror" id="nama_barang" placeholder="nama_barang" required value="{{ old('nama_barang') }}">
                </div><br>
              </div>
              <div class="col-sm-6">
                <div class="from-group">
                <input type="number" name="jumlah_barang" class="form-control @error('jumlah_barang')is-invalid @enderror" id="jumlah_barang" placeholder="jumlah_barang" required value="{{ old('jumlah_barang') }}">
                </div><br>
                <div class="from-group">
                <input type="number" name="harga_barang" class="form-control @error('harga_barang')is-invalid @enderror" id="harga_barang" placeholder="harga_barang" required value="{{ old('harga_barang') }}">
                </div><br>
              </div>
              <div> 
                
              <button class=" sumfonttambahstok btn btn-dark" type="submit">Simpan</button>
              </div>
              <a href="/head" type="button" class="sumfontback btn btn-dark" > Back to Summary Stok</a>
          
          </form>
         
         
         

          </div>
                
            </div>
        </div>
        
    
   
    
   
      
    </div>
  </div>

    </main>
    
    

