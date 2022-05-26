
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
          <li class="nav-item">
            <a class="nav-link {{($title==="Login") ? 'active' : '' }} " aria-current="page" href="/login">Log-In</a>
          </li>
        
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-4">
<form action="login.php" method="GET">
        <fieldset>
        <h3>Sign Up <img src="foto/<?= "logo.png"?>" alt="TRETION" width="150"> </h3>
        <p>
            <label>Email:</label>
            <input type="text" name="username" placeholder=" 📧 Enter your email" />
        </p>
        <p>
            <label>Password:</label>
            <input type="password" name="password" placeholder=" 🔐 Enter your password" />
        </p>
        <p>
            <label>Password:</label>
            <input type="password" name="password" placeholder=" 🔐 Enter your password again" />
        </p>
        <p>
            <label><input type="checkbox" name="admin" value="admin" /> Admin</label>
            <input type="submit" name="submit" value="Minta kode" />
            <input type="text" name="admin" placeholder=" 🔐 Enter ID Admin" />
        </p>
        <p>
            <input type="submit" name="submit" value="Sign Up" />
        </p>

        </fieldset>
    </form>

</div>
    
    
    </body>
</html>
    