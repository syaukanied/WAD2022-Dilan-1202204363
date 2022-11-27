<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

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

      <section>
        <br>
        <br>
        <div style="margin: 40px; margin-top: 40px" class="additem">
            <div class="judul">
                <h1>Profil</h1>
            </div>
            <form action="">
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="staticEmail"
                            value="<?php echo $_COOKIE['email']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="<?php echo $_COOKIE['nama']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="hp" class="col-sm-2 col-form-label">Nomor Handphone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="hp" name="hp"
                            value="<?php echo $_COOKIE['noHP']; ?>">
                    </div>
                </div>
                <hr>
                <div class="mb-3 row">
                    <label for="password" class="col-sm-2 col-form-label">Kata Sandi</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password2" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password2" name="password2"
                            placeholder="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="navbar" class="col-sm-2 col-form-label">Warna Navbar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="navbar" value="">
                    </div>
                </div>
                <div style="text-align:center;">
                    <br>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
