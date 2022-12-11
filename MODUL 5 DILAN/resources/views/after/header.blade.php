<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>WAD | Dilan_1202204363</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    <link href="/asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/asset/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="/asset/style/index.css" rel="stylesheet">
</head>

  </head>
<body>
@auth
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
         
            <a class="nav-link active" aria-current="page" href="/">Home</a>
            <a class="nav-link" href="/product">MyCar</a>
          </div>
        </div>
        <div class="d-flex">
          <a href="/product/create">
          <button class="btn btn-dark" type="submit" style="color: white;">Add Car</button></a>
          <div class="dropdown ms-4">
            <button class="btn btn-dark dropdown-toggle" type="button " id="dropdownMenuButton1" style="color: white;" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->nama }}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" style="color: black;" href="{{ route('profile') }}">Profile</a></li>
              
              <li><a class="dropdown-item" style="color: black;" href="{{ route('logout') }}">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->
    @endauth
    @yield('content')
</body>


  <br>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</html>
