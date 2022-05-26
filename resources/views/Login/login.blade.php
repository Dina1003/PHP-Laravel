@extends('layouts.main')

@section('klp1')

<div class="row justify-content-center">
  <div class="col-md-4">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" rolw="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
        
    @endif

    @if (session()->has('error!'))
    <div class="alert alert-danger alert-dismissible fade show" rolw="alert">
      {{ session('error!') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


  

<main class="form-signin w-100 m-auto">
    <form action='/login' method="post">
      @csrf
      <h1 class="h3 mb-3 fw-normal">Log-In</h1>
  
      <div class="form-floating">
        <input type="text" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}" autofocus>
        <label for="email">Email</label>
        @error('email')
        <div class ="invalid-feedback">
          {{ $message }}
        </div> 
        @enderror
      </div >
      <div class="form-floating">
        <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="password" placeholder="password" required value="{{ old('password') }}" autofocus>
        <label for="password">Password</label>
        @error('password')
        <div class ="invalid-feedback">
          {{ $message }}
        </div> 
        @enderror
      </div >

    
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="d-block text-center mt-5 mb-3 text-muted">&copy; 2017–2040</p>
    </form>
    <small class ="d-block text-center ms-4"> Don't Have an Account yet? 
        <a href = "/register"> Create Here!</small>
  </main>
</div>
</div>

    @endsection
        
