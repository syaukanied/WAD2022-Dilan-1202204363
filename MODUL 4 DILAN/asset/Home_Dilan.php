<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-primary fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a style="color: white" class="nav-link" href="Home_Dilan.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: white" class="nav-link" href="ListCar_Dilan.php">My Car</a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-dark" href="Add_Dilan.php" role="button">Add Car</a>
                        </div>
                        <div class="col">
                            <div class="dropdown">
                                <button type="button" class="btn btn-dark dropdown-toggle"
                                    data-bs-toggle="dropdown">
                                    Dilan
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="Profil_Dilan.php">Profile</a></li>
                                    <li><a class="dropdown-item" href="HomeLogin_Dilan.php">LogOut</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

      <div>
        <br>
        <br>
            <div style="margin: 40px;" class="row">
              <div class="col">
                <h1>Selamat Datang Di Show Room Dilan</h1>
                <a>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.<a>
                  <br>

                  <a href="ListCar_Dilan.php">
                     <button type="button" class="btn btn-primary btn-mycar mt-4">My Car</button>
                   </a>

                   <div class="w-100 mt-5"></div>
                   <img src="logo-ead.png" alt="logo" width=20%>    
                   <span class="ms-3">Dilan_1202204136</span>     
                </div>
              <div style="text-align :center" class="col">
                <img src="download.jpg" alt="mobil" width=110% >
            </div>
          </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>