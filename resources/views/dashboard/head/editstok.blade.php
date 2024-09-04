
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
            
        
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
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
             
        
           <h1 class="text-center h3 mb-4 fw-normal"><br>Restok Data Stok Dapur</h1>
            <form action="/updatestok/{{ $restok->id }}" method="POST">
              @csrf 

             
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="text" name="nomor_nota" class="form-control " id="nomor_nota" placeholder="Nomor Nota" required value="{{ old('nomor_nota') }}">
                    <label for="nomor_nota">Nomor Nota</label>
                  </div> <br>
                  <div class="form-floating">
                    <input type="text" name="kode_barang" class="form-control " id="kode_barang" placeholder="Kode Barang"  required value="{{ $restok->kode_barang }}">
                    <label for="kode_barang">Kode Barang</label>


                    {{-- <input type="text" name="kode_barang" class="form-control @error('kode_barang')is-invalid @enderror" id="kode_barang" placeholder="kode_barang" required value="{{ $restok->kode_barang }}"> --}}
                  </div> <br>
                  {{-- <div class="form-floating">
                    <input type="text" name="nama_barang" class="form-control @error('nama_barang')is-invalid @enderror" id="nama_barang" placeholder="nama_barang" required value="{{ $restok->nama_barang }}">
                  </div>
                </div> --}}

                
                  <div class="form-floating">
                    <input type="number" name="qty" class="form-control " id="qty" placeholder="Qty" required value="{{ old('qty') }}">
                    <label for="qty">Qty</label>


                    {{-- <label for="nomor_nota">Jumlah </label>
                    <input type="text" name="qty" class="form-control @error('qty')is-invalid @enderror" id="qty" placeholder="qty" required value="{{ old('qty')}}"> --}}
                  </div><br>
                  {{-- <div class="form-floating">
                    <input type="text" name="harga_barang" class="form-control @error('harga_barang')is-invalid @enderror" id="harga_barang" placeholder="harga_barang" required value="{{ $restok->harga_barang }}">
                  </div>
                </div> --}}

             

              <br><div> 
                
                <button class=" sumfontedit btn btn-info" type="submit">Simpan</button>
                </div>

            </form>
            
            
         
          
        
         
        
         
        
          </div>
        </div>
        </main>
        
   
      
    </div>
  </div>

    </main>
    
    

