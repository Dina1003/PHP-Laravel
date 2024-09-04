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
                <a class="nav-link active" aria-current="page" href="/head">
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
      <h1 class="text-center tulisan"><br>Detail Belanja Dapur</h1>
      <form action="/restok" method="POST">
        @csrf
        <div class="sumfont3 container">
            <div class="row">

                <table class="table table-striped table-sm">
                    <thead >
                      <tr class="font1">
                        <th  scope="col">Nomor Nota </th>
                        <th scope="col">ID Cafe</th>
                        <th scope="col">ID Jastip</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Total Belanja</th>
                        <th scope="col">Aksi</th>
                      
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)

                        <tr class="font1">
                            <td class="font1">{{ $data->nomor_nota }}</td>
                            <td class="font1">{{ $data->id_cafe }}</td>
                            <td class="font1">{{ $data->id_jastip }}</td>
                            <td class="font1">{{ $data->tanggal }}</td>
                            <td class="font1">Rp{{ $data->total_belanja }}</td>
                            <td> 
                                <a href="/hapusdata/{{ $data->id }}" class="btn btn-danger">Hapus</a>
                              </td>
                          </tr>
                            
                        @endforeach
                     
                     
                    </tbody>
                  </table>
            </div>
        </div>
    
   
    
   
      
    </div>
  </div>

  <div class="row">
   
    
    <div class=" sumfontrestok col-sm-6">
        <div class="form-group">
         <input type="text" name="nomor_nota" class="form-control @error('nomor_nota')is-invalid @enderror" id="nomor_nota" placeholder="nomor_nota" required value="{{ old('nomor_nota')}}">
         <input type="text" name="id_cafe" class="form-control @error('id_cafe')is-invalid @enderror" id="id_cafe" placeholder="id_cafe" required value="{{('TR1003')}}">
         <input type="text" name="id_jastip" class="form-control @error('id_jastip')is-invalid @enderror" id="id_jastip" placeholder="id_jastip" required value="{{ ('251003')}}">
         <input type="date" name="tanggal" class="form-control @error('tanggal')is-invalid @enderror" id="tanggal" placeholder="tanggal" required value="{{ old('tanggal')}}">
         <input type="text" name="total_belanja" class="form-control @error('total_belanja')is-invalid @enderror" id="total_belanja" placeholder="total_belanja" required value="{{ old('total_belanja')}}">
         <button type="submit" class=" btn btn-dark">Tambah+</button>
        </div>
    </div>
    </form> 
</div>

    </main>

    
   
    
    

