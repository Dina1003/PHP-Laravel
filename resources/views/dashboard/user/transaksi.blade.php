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

     <!-- jam -->
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
     <link href="style.css" rel="stylesheet">  
  </head>
  <body>

    @include('dashboard.layouts.header')

 <main class="form-signin1 w-100  m-auto" >
  <div class="container-fluid">
    <div class="rps row">
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

      <style>
        /* Style The Dropdown Button */
        .dropbtn {
          background-color: #4CAF50;
          color: white;
          padding: 16px;
          font-size: 16px;
          border: none;
          cursor: pointer;
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
          background-color: #3e8e41;
        }

        .button{
    width: 100%;
    height: 50px;
  }
  .left{
    float: left;
    display: block;
  }
  .right{
    float: right;
    display: block;
  }
.button ul a
{
  padding: 10px;
  background: rgb(116, 181, 12);
  color: white;
}
        </style>

<h1 class="text-center"><strong>Transaksi</strong></h1>


          {{-- fiks kodingan buat transaksi --}}
          <form action="" method="POST">
            @csrf
            <div class="sumfont8 container">
                <div class="row">
    
                    <table class="table table-striped table-sm">
                        <thead >
                          <tr >
                            <th scope="col">Nama Menu</th>
                            <th scope="col">Harga Menu</th>
                            <th scope="col">Aksi</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($menu as $menu)
    
                            <tr >
                                <td >{{ $menu->nama_menu }}</td>
                                <td >{{ $menu->harga}}</td>
                                <td> 
                                    <a href="/pesan/{{ $menu->id }}" class="btn btn-danger">Pesan</a>
                                  </td>
                              </tr>
                                
                            @endforeach
                         
                         
                        </tbody>
                      </table>
                </div>
            </div>
        
       
        
       
          
        </div>

        
  
 
  
 
    
  </div>


           
                   
         

          

          {{-- ini kodingan fiks buat nampilin pesanannya --}}
          <br> <br> <br> <br><br> <br><br><br><br><br><br><br><br><br><br><br>
          <h6 class="h3 mb-3 fw-normal">Order</h6>
          
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">Nama Menu</th>
                <th scope="col">Harga Menu</th>
                <th scope="col">QTY</th>
                <th scope="col">Sub Total</th>
                <th scope="col">Aksi</th>
            </thead>
            @foreach ($order as $order)
            
            @php
          $total = $order["harga_menu"] * $order["qty"]
          @endphp
          @php
            $bayar=0
          @endphp
          @php
          $bayar += $total; 
       @endphp

          <tbody>
            
              <td>{{ $order->nama_menu }}</td>
              <td>{{ $order->harga_menu }}</td>
              <td>{{ $order->qty}}</td>
              <td>{{ ($total)}}</td>
              <td>
              
                <a href="/hapuspesanan/{{ $order->id }}" onclick="return confirm('Batalkan Pesanan?')"  class="btn btn-danger">batal</a>
              </td>
              
              

             
              
          </tbody>

         

            @endforeach

           

          </table>
        

  
  </div>
  

    </main>
    <div>
    <a onclick="return confirm('Yakin Selesai Melakukan Order?')" type="button" class="sumfont10 btn btn-info" href="/transaksifiks">
      Keranjang Belanja</a>
    </div>
    







        
