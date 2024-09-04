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

     <!-- jam -->
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
     <link href="style.css" rel="stylesheet">  
  </head>
  <body>

    @include('dashboard.layouts.header')
 <main class="  welcome  w-100 " >
  <div class="container-fluid">
    <div class="rps row">
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

     

      <h1 class="tulisan3"><br><br>Staff Gudang Dapur</h1>

      {{-- jam --}}
    
      <div class=" open card card body"> Open: 
        <p  id="clock"> </p>
        <script >
           setInterval(customClock, 500);
           function customClock() {
               var time = new Date();
               var hrs = time.getHours();
               var min = time.getMinutes();
               var sec = time.getSeconds();
    
               document.getElementById('clock').innerHTML = hrs + ":" + min + ":" + sec;  
            }
         </script>

      </div>
           <br><br><br>

         
         <div  class=" open card card body"> DATE:<br>
            <script type='text/javascript' font-size: 20px; >
                var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
             var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
             var date = new Date();
             var day = date.getDate();
             var month = date.getMonth();
             var thisDay = date.getDay(),
                 thisDay = myDays[thisDay];
             var yy = date.getYear();
             var year = (yy < 1000) ? yy + 1900 : yy;
             document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
     
              </script>

         </div>

        
         <h6 class="sum sumfont">Stok Dapur</h6>
      
      <div class="dash  trans table-responsive">
        <table class=" text table table-striped table-sm">
          <thead>
            <tr>
            
              <th scope="col">Kode Barang</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Stok</th>
              <th scope="col">Aksi</th>
             
              
             
              
              
            </tr>
          </thead>
          @foreach ($data as $data)
              
          
          <tbody>
              
              <td >{{ $data->kode_barang }}</td>
              <td >{{ $data->nama_barang }}</td>
              <td >{{ $data->jumlah_barang}}</td>
              <td>
                
                  <a href="/ambil/{{ $data->id }}" class="btn btn-danger">Ambil Bahan</a>
              
              </td>

            

          
             
          </tbody>
          @endforeach
        </table>
      </div> 

     
        
           
       
            
        

    </div>
  </div>

  <div> 
    <a href="/TRETION"> <button class="close">Close</button></a>

  </main>
  <form action="/ready" method="POST">
    @csrf
    <div class="sumfont7 container">
        <div class="row">

            <table class="table table-striped table-sm">
                <thead >
                  <tr class="font1">
                    <th scope="col">Nama Barang</th>
                    <th scope="col">QTY</th>
                    <th scope="col">Aksi</th>
                  
                  </tr>
                </thead>
                <tbody>
                    @foreach ($req as $req)

                    <tr class="font1">
                        <td class="font1">{{ $req->nama_barang }}</td>
                        <td class="font1">{{ $req->req}}</td>
                        <td> 
                            <a href="/terima/{{ $req->id }}" class="btn btn-danger">Ready</a>
                          </td>
                      </tr>
                        
                    @endforeach
                 
                 
                </tbody>
              </table>
        </div>

    

