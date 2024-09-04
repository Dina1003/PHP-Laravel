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
 <main class="welcome row  col-ms-6 w-100 m-auto" >
  <div class="container-fluid">
    <div class="rps row ">
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
      <h1 class="text-center tulisan"><br>Request Bahan Dapur</h1>
      <form action="" method="POST">
        @csrf
        <div class="sumfont5 container">
            <div class="row">

                <table class="table table-striped table-sm">
                    <thead >
                      <tr class="font1">
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Total Stok</th>
                        <th scope="col">Aksi</th>
                      
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)

                        <tr class="font1">
                            <td class="font1">{{ $data->kode_barang }}</td>
                            <td class="font1">{{ $data->nama_barang}}</td>
                            <td class="font1">{{ $data->jumlah_barang}}</td>
                            <td> 
                                <a href="/pilih/{{ $data->id }}" class="btn btn-danger">Request</a>
                              </td>
                          </tr>
                            
                        @endforeach
                     
                     
                    </tbody>
                  </table>
            </div>
        </div>
    
   
    
   
      
    </div>

    {{-- buat nampilin request --}}

    <div>
      
      <form action="" method="POST">
        @csrf
        <div class="sumfont6 container">
            <div class="row">

                <table class="table table-striped table-sm">
                    <thead >
                      <tr class="font1">
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Request</th>
                        
                      
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($req as $req)

                        <tr class="font1">
                            <td class="font1">{{ $req->kode_barang }}</td>
                            <td class="font1">{{ $req->nama_barang}}</td>
                            <td class="font1">{{ $req->req}}</td>
                            
                          </tr>
                            
                        @endforeach
                     
                     
                    </tbody>
                  </table>
            </div>
        </div>
    
   
    
   
      
    </div>
  </div>

  {{-- <div class="row">
    
    <div class=" sumfontrestok col-sm-6">
        <div class="form-group">
         <input type="text" name="kode_barang" class="form-control @error('kode_barang')is-invalid @enderror" id="kode_barang" placeholder="kode_barang" required value="{{ $data->kode_barang}}">
         <input type="text" name="nama_barang" class="form-control @error('nama_barang')is-invalid @enderror" id="nama_barang" placeholder="nama_barang" required value="{{ $data->nama_barang}}">
         <input type="text" name="jumlah_barang" class="form-control @error('jumlah_barang')is-invalid @enderror" id="jumlah_barang" placeholder="jumlah_barang" required value="{{$data->jumlah_barang}}">
         <input type="text" name="request" class="form-control @error('request')is-invalid @enderror" id="request" placeholder="request" required value="{{ old('request')}}">
         <button type="submit" class=" btn btn-dark">Sent to Staff Kitchen</button>
        </div>
    </div>
    </form> 
</div> --}}

    </main>

    
   
    
    

