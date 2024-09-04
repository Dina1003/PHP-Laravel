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
 <main class="welcome row  col-ms-6 w-100 m-auto" >
  <div class="container-fluid">
    <div class="rps row ">
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
      <h1 class="tulisan"><br><br>Payment</h1>
        {{-- pilihannya --}}
    {{-- 1 --}}
    <div class="dropdown sumfontpay">
        <button class="dropbtn ">M-BANKING</button>
        <div class="dropdown-content">
          <a onclick="return confirm('Scan Pembayaran Berhasil')"  href="/struk">BNI</a>
          <a onclick="return confirm('Scan Pembayaran Berhasil')"  href="/struk">BRI</a>
          <a onclick="return confirm('Scan Pembayaran Berhasil')"  href="/struk">BCA</a>
        </div>
      </div>
      {{-- 2 --}}
      <div class="dropdown sumfontpay">
        <button class="dropbtn ">E-WALLET</button>
        <div class="dropdown-content">
          <a onclick="return confirm('Scan Pembayaran Berhasil')"  href="/struk">OVO</a>
          <a onclick="return confirm('Scan Pembayaran Berhasil')"  href="/struk">GOPAY</a>
        </div>
      </div>

      {{-- 3 --}}
      <div class="dropdown sumfontpay">
        <a class="dropbtn btn btn-lg" type="button"  onclick="return confirm('Scan Pembayaran Berhasil')"  href="/struk" > DEBIT</a>
      </div>

      
      
    {{-- pilihan end --}}
    
   
      
    </div>
  </div>

    </main>
    
    

