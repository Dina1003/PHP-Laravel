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
 <main class="welcome row  col-ms-6 w-100 m-auto" >
  <div class="container-fluid">
    <div class="rps row ">
      @include('dashboard.layouts.sidebar')
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
      <h1 class="text-center tulisan"><br>Stok Dapur</h1>
        <div class="sumfont3 container">
            <div class="row">
                <table class="table table-striped table-sm">
                    <thead >
                      <tr>
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga Barang</th>
                        <th scope="col">Jumlah Barang</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $barang)

                        <tr>
                            <td>{{ $barang->kode_barang }}</td>
                            <td>{{ $barang->nama_barang }}</td>
                            <td>Rp {{ $barang->harga_barang }}</td>
                            <td>{{ $barang->jumlah_barang }}</td>
                            <td>
    
                                <a href="/hapusstok/{{ $barang->id }}"  class="btn btn-danger">Hapus</a>
                                <a href="/editstok/{{ $barang->id }}" class="btn btn-info">Edit</a>
    
                            </td>
    
                          </tr>
                            
                        @endforeach
                     
                     
                    </tbody>
                  </table>
            </div>
        </div>
    
   
    
   
      
    </div>
  </div>

    </main>
    
    

