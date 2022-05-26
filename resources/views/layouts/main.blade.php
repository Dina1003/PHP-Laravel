<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Boottstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

        <!-- Main styles -->
        <link rel="stylesheet" href="/CSS/style.css">
    
    <title>TRETION</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{($title==="Home") ? 'active' : ''}} " aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{($title==="About") ? 'active' : '' }} " aria-current="page" href="/about">About</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link {{($title==="Dashboard") ? 'active' : '' }} " aria-current="page" href="/dashboard">Dashboard</a>
          </li> --}}
         
      </ul>

      <ul class="navbar-nav ms-auto">
      @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id ="navbarDropdown"  data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Walecome Back, {{ auth()->users()->username }}</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#scrollspyHeading3">Dashboard</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#scrollspyHeading5">Logout</a></li>
        </ul>
      </li>
        @else 
        <li class="nav-item ms-auto">
          <a class="nav-link {{($title==="Login") ? 'active' : '' }} " aria-current="page" href="/login"><i class="bi bi-box-arrow-in-right"></i> 
            Log-In</a>
        </li>

        <li>

          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="dropdown-item">log-out</button>
          </form>

        </li>
      @endauth
       
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
    @yield('klp1')

</div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>