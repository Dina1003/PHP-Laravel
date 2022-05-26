<!doctype html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Tretion</title>

   <!-- core css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">>
    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body>

    @include('dashboard.layouts.header')
    


<div class="container-fluid">
  <div class="row">
   @include('dashboard.layouts.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    @yield('container')

      {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}
      <div class="rps"></div>


      <h6><br>Summary Transaksi<br></h6>
      <div class="dash table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Nomor</th>
              <th scope="col">Kode Transaksi</th>
              <th scope="col">Id Cafe</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Total Transaksi</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          @foreach ($data as $data)
              
          
          <tbody>
              <td>{{ $data->id }}</td>
              <td>{{ $data->kode_transaksi }}</td>
              <td>{{ $data->id_cafe }}</td>
              <td>{{ $data->tanggal }}</td>
              <td>{{ $data->total_transaksi }}</td>
              <td> <a href="#">Edit</a> - <a href="#">Hapus</a></td>
            
          </tbody>
          @endforeach
        </table>
      </div>

      <h6> Summary Stok </h6>
      <div class="dash table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Nomor</th>
              <th scope="col">Kode Barang</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Harga Barang</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          @foreach ($bar as $bar)
              
          
          <tbody>
              <td>{{ $bar->id }}</td>
              <td>{{ $bar->kode_barang }}</td>
              <td>{{ $bar->nama_barang }}</td>
              <td>{{ $bar->harga_barang }}</td>
              <td> <a href="#">Edit</a> - <a href="#">Hapus</a></td>
            
          </tbody>
          @endforeach
        </table>
      </div>

      


     
      
    </main>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" 
      integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" 
      crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" 
      integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" 
      crossorigin="anonymous"></script>
      <script src="/js/dashboard.js"></script>
  </body>
</html>
