
        <!doctype html>
        <html lang="en">
          
          
          
          <head>
            <meta charset="utf-8">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>STAFF GUDANG DAPUR</title>
        
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
              <div class="rps row ">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                  <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/staff">
                          <span data-feather="home" class="align-text-bottom"></span>
                          💡 Staff 
                        </a>
                     
                      </li>
                    </ul>
                  </div>
                </nav>
           @yield('container')
             
        
           <h1 class="text-center h3 mb-4 fw-normal"><br>Ambil Stok Dapur</h1>
            <form action="/update/{{ $data->id }}" method="POST">
              @csrf 

             
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="text" name="kode_barang" class="form-control @error('kode_barang')is-invalid @enderror" id="kode_barang" placeholder="kode_barang" required value="{{ $data->kode_barang }}">
                  </div> <br>
                  <div class="form-floating">
                    <input type="text" name="nama_barang" class="form-control @error('nama_barang')is-invalid @enderror" id="nama_barang" placeholder="nama_barang" required value="{{ $data->nama_barang }}">
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="number" name="jumlah_barang" class="form-control @error('jumlah_barang')is-invalid @enderror" id="jumlah_barang" placeholder="jumlah_barang" required value="{{$data->jumlah_barang}}">
                  </div><br>
                  <div class="form-floating">
                    <input type="number" name="req" class="form-control @error('req')is-invalid @enderror" id="req" placeholder="req" required value="{{old('req')}}">
                  </div><br>
                  
                </div>

              </div>

              <br><div> 
                
                <button class=" sumfontedit btn btn-info" type="submit" onclick="return confirm('Barang Berhasil di Ambil ')" >Selesai</button>
                </div>

            </form>
            
            
         
          
        
         
        
         
        
          </div>
        </div>
        </main>
        
   
      
    </div>
  </div>

    </main>
    
    

