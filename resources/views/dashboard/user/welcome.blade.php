<!doctype html>
<html lang="en">
  
  
  
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome Tretion</title>

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
              <a class="nav-link active" aria-current="page" href="#">
                <span data-feather="home" class="align-text-bottom"></span>
                Wellcome 😊
              </a>
            </li>
          </ul>
        </div>
      </nav>
      @yield('container')

     <div>
      <h1 class="tulisan"><br><br>SELAMAT DATANG</h1>
     </div>
      <div >
        <div class="col-sm-6">
          <div class="form-floating">
            <form>
            <input type="text" name="admin" class="form-control kolom @error('admin')is-invalid @enderror" id="admin" placeholder="Admin" required  value="{{ ('2011521003')}}">
            
         
            <a type="button" class="btn go" href="/dashboard" >Admin</a><br>
          </form>
          @error('admin')
          <div class ="invalid-feedback">
            {{ $message }} 
          </div>
          @enderror
        </div>
      </div> <br><br>

      <div class="row">
        <div class="col-sm-6">
          <div class="form-floating">
            <form>
            <input type="text" name="waiter" class="form-control kolom @error('waiter')is-invalid @enderror" id="waiter" placeholder="Waiter"  value="{{('2011522017') }}">
       
          
            <a type="button" class="btn go" href="/waiter" >Waiter</a><br>
          </form>
          @error('waiter')
          <div class ="invalid-feedback">
            {{ $message }}
          </div> 
          @enderror
          </div>
        </div>
      </div> <br><br>

      <div class="row">
        <div class="col-sm-6">
          <div class="form-floating">
            <form>
            <input type="text" name="head" class="form-control kolom @error('head')is-invalid @enderror" id="head" placeholder="Head Kitchen"  value="{{ ('2011522014')}}">
        
         
            <a type="button" class="btn go" href="/head" >HK</a><br>
          </form>
          @error('head')
          <div class ="invalid-feedback">
            {{ $message }}
          </div> 
          @enderror
          </div>
        </div>
      </div> <br><br>

      <div class="row">
        <div class="col-sm-6">
          <div class="form-floating">
            <form>
            <input type="text" name="chef" class="form-control kolom @error('chef')is-invalid @enderror" id="chef" placeholder="Koki"  value="{{ ('2011522018') }}">
       
         
            <a type="button" class="btn go" href="/koki" >Chef</a><br>
          </form>
          @error('chef')
          <div class ="invalid-feedback">
            {{ $message }}
          </div> 
          @enderror
          </div>
        </div>
      </div> <br><br>

      <div class="row">
        <div class="col-sm-6">
          <div class="form-floating">
            <form>
            <input type="text" name="staff" class="form-control kolom @error('staff')is-invalid @enderror" id="staff" placeholder="Staff Gudang"  value="{{ ('2011522028')}}">
            
             
                <a type="button" class="btn go" href="/staff" >SG</a><br>
              </form>
              @error('staff')
              <div class ="invalid-feedback">
                {{ $message }}
              </div> 
              @enderror
          </div>
        </div>
      </div> <br><br>
    {{-- codingan lama --}}
      {{-- <form>
        <div class="form-floating">
          <input type="text" name="admin" class="form-control @error('admin')is-invalid @enderror" id="admin" placeholder="Enter Your ID"  value="{{ old('admin') }}">
          <label for="admin">ID ADMIN</label>
          <form>
            <a type="button" class="btn btn-secondary" href="/dashboard" >GO</a>
          </form>
          @error('admin')
          <div class ="invalid-feedback">
            {{ $message }}
          </div> 
          @enderror
        </div>
      </form>
      <form>
        <div class="form-floating">
          <input type="text" name="waiter" class="form-control @error('waiter')is-invalid @enderror" id="waiter" placeholder="Enter Your ID"  value="{{ old('waiter') }}">
          <label for="waiter">ID WAITER</label>
          <form>
            <a type="button" class="btn btn-secondary" href="/waiter" >GO</a>
          </form>
          @error('waiter')
          <div class ="invalid-feedback">
            {{ $message }}
          </div> 
          @enderror
        </div>
      </form>
      <form>
        <div class="form-floating">
          <input type="text" name="head" class="form-control @error('head')is-invalid @enderror" id="head" placeholder="Enter Your ID"  value="{{ old('head') }}">
          <label for="head">ID HEAD KITCHEN</label>
          <form>
            <a type="button" class="btn btn-secondary" href="/head" >GO</a>
          </form>
          @error('head')
          <div class ="invalid-feedback">
            {{ $message }}
          </div> 
          @enderror
        </div>
      </form>
      <form>
        <div class="form-floating">
          <input type="text" name="chef" class="form-control @error('chef')is-invalid @enderror" id="chef" placeholder="Enter Your ID"  value="{{ old('chef') }}">
          <label for="chef">ID CHEF</label>
          <form>
            <a type="button" class="btn btn-secondary" href="#" >GO</a>
          </form>
          @error('chef')
          <div class ="invalid-feedback">
            {{ $message }}
          </div> 
          @enderror
        </div>
      </form>
      <form>
            <div class="form-floating">

              <input type="text" name="staff" class="form-control @error('staff')is-invalid @enderror" id="staff" placeholder="Enter Your ID"  value="{{ old('staff') }}">
              <label for="staff">ID STAFF GUDANG DAPUR</label>
              <form>
                <a type="button" class="btn btn-secondary" href="#" >GO</a>
              </form>
              @error('staff')
              <div class ="invalid-feedback">
                {{ $message }}
              </div> 
              @enderror
            </div>
      </form> --}}

   
      
    </div>
  </div>

    </main>
    

