<!doctype html>
<html lang="en">
  
  
  
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Tretion</title>

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
    

<main  class=" background text col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="container-fluid">
  <div class="row">
   @include('dashboard.layouts.sidebar')

   
    @yield('container')


{{-- ini untuk nampilin ringkasan transaksi --}}

<div id="container row container-fluid">
      <div class="rps col-lg-8">


      <h6><br>Summary Transaksi<br></h6>
      
      <div class="dash table-responsive">
        <table class="table text table-striped table-sm">
          <thead>
            <tr>
            
              <th scope="col">Kode Transaksi</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Total Transaksi</th>
             
              
              
            </tr>
          </thead>
          @foreach ($data as $data)
              
          
          <tbody>
              
              <td class="text">{{ $data->kode_transaksi }}</td>
              <td class="text">{{ $data->tanggal }}</td>
              <td class="text">{{ $data->total_transaksi}}</td>
            

          
             
          </tbody>
          @endforeach
        </table>
      </div> 

      <h6> Summary Menu </h6>
      <div class="dash  table-responsive">
        <table class=" text table table-striped table-sm">
          <thead>
            <tr>
              
              <th scope="col">Kode Menu</th>
              <th scope="col">Nama Menu</th>
              <th scope="col">Harga Menu</th>
              <th scope="col">Aksi</th>
              <th>
                <div class="col-lg-6" align="right 5px">
                  <a type="button" class="btn btn-secondary" href="{{ url('/tambah') }}" 
                  onclick="return confirm('WARNING!!\n MOHON ISIKAN DATA YANG BENAR 😊\n Klik *OKE* untuk lanjut')">Tambah</a>
                </div></th>
            </tr>
          </thead>
          @foreach ($menu as $menu)
              
          
          <tbody>
            
              <td class="text">{{ $menu->kode_menu }}</td>
              <td class="text">{{ $menu->nama_menu }}</td>
              <td class="text">{{ $menu->harga }}</td>
              <td> 
                <form action="{{  url('dashboard/'. $menu->id) }}" method="POST">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-danger" type="submit" onclick="return confirm('Anda yakin mau menghapus item ini ?')" >Hapus</button>
                
                {{-- <form action="{{  url('edit/'. $model->id) }}" method="POST">
                  @csrf
                  <input type="hidden" name="_method"  value="PATCH">
                <button class="btn btn-info" type="submit" onclick="return confirm('Anda yakin mau edit item ini ?')" >Edit</button>
                </form> --}}
                <a href="/editmenu/{{ $menu->id }}" class="btn btn-info">Edit</a>
               
              </form>
              </td>
          </tbody>
          @endforeach
        </table>
      </div>

      <h6> Summary Stok Kitchen </h6>
      <div class="dash  table-responsive">
        <table class=" text table table-striped table-sm">
          <thead>
            <tr>
              
              <th scope="col">Kode Barang</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Harga Barang</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          @foreach ($barang as $barang)
              
          
          <tbody>
            
              <td class="text">{{ $barang->kode_barang }}</td>
              <td class="text">{{ $barang->nama_barang }}</td>
              <td class="text">{{ $barang->harga_barang}}</td>
              <td> 
                <a href="/delete/{{ $barang->id }}" class="btn btn-danger">Hapus</a>
                <a href="/editstok/{{ $barang->id }}" class="btn btn-info">Edit</a>
                
               
              </form>
              </td>
          </tbody>
          @endforeach
        </table>
      </div>
      


     
      
    </main>
  </div>


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
      <script src="https://code.highcharts.com/highcharts.js"></script>
      {{-- <script>
        Highcharts.chart('container', {
    chart: {
        type: 'spline'
    },
    title: {
        text: 'Ringkasan Penjualan Menu'
    },
    subtitle: {
        text: 'TRETION.COM'
    },
    xAxis: {
        categories: {!!json_encode($categories)!!},
        accessibility: {
            description: 'Menu yang Tersedia'
        }
    },
    yAxis: {
        title: {
            text: 'Range'
        },
        labels: {
            formatter: function () {
                return this.value + '°';
            }
        }
    },
    tooltip: {
        crosshairs: true,
        shared: true
    },
    plotOptions: {
        spline: {
            marker: {
                radius: 4,
                lineColor: '#666666',
                lineWidth: 1
            }
        }
    },
    series: [{
        name: 'Menu',
        marker: {
            symbol: 'square'
        },
        data: [7.0, 6.9,{
            
            marker: {
                symbol: 'url(https://www.highcharts.com/samples/graphics/sun.png)'
            },
            accessibility: {
                description: 'Sunny symbol, this is the warmest point in the chart.'
            }
        }]

    }], 
        
});
      </script> --}}
  </body>
</html>
