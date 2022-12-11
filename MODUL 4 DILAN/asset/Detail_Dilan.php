<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

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

    <?php
        include './config/connector.php';
    
        $id_mobil = $_GET['id_mobil'];
        $listMobil = mysqli_query($connect, "select * from showroom_dilan_table where id_mobil = '$id_mobil'");
        while($data = mysqli_fetch_array($listMobil)){
    ?>


    <section>
        <div class="additem">
            <div class="judul">
                <h1><?php echo $data['nama_mobil']?></h1>
                <br>
                <h2>Detail Mobil</h2>
            </div>
            <div class="row">
                <div class="col">
                    <img class="img-fluid" src="img/<?php echo $data['foto_mobil']?>"
                        alt="<?php echo $data['nama_mobil']?>" style="width: 100%;" />
                </div>
                <div class="col">
                    <div>
                        <div class="mb-3">
                            <label for="nama_mobil" class="form-label">Nama Mobil</label>
                            <input type="text" class="form-control" id="nama_mobil" name="nama_mobil"
                                value="<?php echo $data['nama_mobil'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                            <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik"
                                value="<?php echo $data['pemilik_mobil'];?>">
                        </div>
                        <div class=" mb-3">
                            <label for="merek" class="form-label">Merk</label>
                            <input type="text" class="form-control" id="merek" name="merek"
                                value="<?php echo $data['merk_mobil'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="tgl_beli" class="form-label">Tanggal Beli</label>
                            <input type="date" class="form-control" id="tgl_beli" name="tgl_beli"
                                value="<?php echo $data['tanggal_beli'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" rows="3"
                                value="<?php echo $data['deskripsi'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="foto_mobil" class="form-label">Foto</label>
                            <input class="form-control" type="file" id="foto_mobil" name="foto_mobil"
                                value="<?php echo $data['deskripsi'];?>">
                        </div>
                        <div>
                            <div>
                                <br>
                                <p>Status Pembayaran</p>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="lunas" value="Lunas"
                                    <?php if($data['status_pembayaran']=='Lunas') echo 'checked'?>>
                                <label class="form-check-label" for="lunas">Lunas</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="belum_lunas"
                                    value="Belum Lunas"
                                    <?php if($data['status_pembayaran']=='Belum Lunas') echo 'checked'?>>
                                <label class="form-check-label" for="belum_lunas">Belum Lunas</label>
                            </div>
                        </div>
                        <div>
                            <br>
                            <div class="col-12">
                                <a href="Edit_Dilan.php?id_mobil=<?php echo $data['id_mobil']?>"
                                    class="btn btn-primary btn-edit me-4" style="width:100px;height:40px;">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        }
    ?>
</body>

</html>