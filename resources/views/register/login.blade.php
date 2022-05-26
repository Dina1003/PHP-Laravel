@extends('layouts.main')

@section('klp1')


<main class="form-signin w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal">Please Register</h1>
      <form action="/register" method="POST">
        @csrf
      <div class="form-floating">
        <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
        <label for="username">Username</label>
        @error('username')
        <div class ="invalid-feedback">
          {{ $message }}
        </div> 
        @enderror
      </div >
      
      
      <div class="form-floating">
        <input type="text" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">
        <label for="email">Email</label>
        @error('email')
        <div class ="invalid-feedback">
          {{ $message }}
        </div> 
        @enderror
      </div >

      <div class="form-floating">
        <input type="password" name="password" class="form-control @error('pass')is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}">
        <label for="password">Password</label>
        @error('password')
        <div class ="invalid-feedback">
          {{ $message }}
        </div> 
        @enderror
      </div >

      <div class="form-floating">
        <input type="password" name = "password1" class="form-control @error('password1')is-invalid @enderror" id="password1" placeholder="Password1"required value="{{ old('password1') }}">
        <label for="password1">Re-enter Password</label>
        @error('password1')
        <div class ="invalid-feedback">
          {{ $message }}
        </div> 
        @enderror
      </div>

      <div class="form-floating">
        <input type="text" name = "no_id" class="form-control @error('no_id')is-invalid @enderror" id="no_id" placeholder="No_id"required value="{{ old('no_id') }}">
        <label for="no_id">No Id</label>
        @error('no_id')
        <div class ="invalid-feedback">
          {{ $message }}
        </div> 
        @enderror
      </div>

      {{-- <div class="form-floating">
        <input type="text" name = "id_head_kitchen" class="form-control @error('id_head_kitchen')is-invalid @enderror" id="id_head_kitchen" placeholder="id_head_kitchen" required value="{{ old('id_head_kitchen') }}">
        <label for="id_head_kitchen">Id_head_kitchen</label>
        @error('id_head_kitchen')
        <div class ="invalid-feedback">
          {{ $message }}
        </div> 
        @enderror
      </div>

      <div class="form-floating">
        <input type="text" name = "id_waiter" class="form-control @error('id_waiter')is-invalid @enderror" id="id_waiter" placeholder="id_waiter" required value="{{ old('id_waiter') }}">
        <label for="id_waiter">Id_waiter</label>
        @error('id_waiter')
        <div class ="invalid-feedback">
          {{ $message }}
        </div> 
        @enderror
      </div>

      <div class="form-floating">
        <input type="text" name = "id_chef" class="form-control @error('id_chef')is-invalid @enderror" id="id_chef" placeholder="id_chef" required value="{{ old('id_chef') }}">
        <label for="id_chef">Id_chef</label>
        @error('id_chef')
        <div class ="invalid-feedback">
          {{ $message }}
        </div> 
        @enderror
      </div>

      <div class="form-floating">
        <input type="text" name = "id_staff_warehouse" class="form-control @error('id_staff_warehouse')is-invalid @enderror" id="id_staff_warehouse" placeholder="Id_staff_warehouse" required value="{{ old('id_staff_warehouse') }}">
        <label for="id_staff_warehouse">Id_Kitchen_Warehouse_Staff</label>
        @error('id_staff_warehouse')
        <div class ="invalid-feedback">
          {{ $message }}
        </div> 
        @enderror
      </div> --}}
  
     
      <button class="w-100 btn btn-lg btn-primary" type="submit">Crate Account</button>
      <p class="d-block text-center mt-5 mb-3 text-muted">&copy; 2017–2040</p>
    </form>
    <small class ="d-block text-center ms-4"> All ready register?
        <a href = "/login"> Login</small>
  </main>

    @endsection
        
