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

    <nav class="navbar navbar-expand-lg fixed-top scroll-down bg-primary" style="color:rgb(41, 41, 41); ;">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a style="color: white" class="nav-link"></a>
              </li>
                <li class="nav-item">
                    <a style="color: white" class="nav-link active" aria-current="page" href="Home_Dilan.php">Home</a>
                  </li>
              <li class="nav-item">
                <a style="color: white" class="nav-link" href="Add_Dilan.php">My car</a>
              </li>
              <div class="d-flex">
          <a href="./pages/add-hamka.php">
          <button class="btn " type="submit" style="color: white;">Add car</button></a>
      </div>
        </div>
      </nav>


    <!--List Car-->
    <section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div style="margin: 40px; margin-top: -40px" class="additem">
            <div class="judul">
                <h1>My Car</h1>
                <br>
            </div>
            <div class="row">
                <?php
                    include './config/connector.php';

                    $query = mysqli_query($connect, "SELECT * FROM showroom_dilan_table");
                    if($query){
                        while($select = mysqli_fetch_assoc($query)){
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 20rem;">
                        <br>
                        <img src="img/<?php echo $select['foto_mobil']?>" class="card-img-top" alt="gambar mobil"
                            style="width: 300px; height:200px;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $select['nama_mobil']?></h5>
                            <p class="card-text"><?php echo $select['deskripsi']?></p>
                            <a href="Detail_Dilan.php"
                                class="btn btn-primary btn-edit me-4">Detail</a>
                            <a href="config/delete.php?id_mobil=<?php echo $select['id_mobil']?>"
                                class="btn btn-danger btn-edit">Hapus</a>
                        </div>
                    </div>
                </div>
                <?php
                        }  
                    }
                ?>
            </div>
    </section>

</body>

</html>