<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Dilan_booking.php">Booking</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php
$img_src = [
    "Brio.jpg",
    "BRV.jpg",
    "CIVIC.jpg"
];
?>

    <section>
        <div style="text-align :center;">
            <br>
            <br>
            <br>
            <h3>WELCOME TO EAD RENT</h3>
            <p>Find your best deal here!</p>
        </div>
      </section>

      <form action="Dilan_booking.php" method="post">
        <div class="row justify-content-center align-content-center">
            <div class="col-md-auto">
                <div class="card">
                    <img src=<?= $img_src[0] ?> class="card-img-top" height="100%">
                    <div class="card-body text-center">
                        <h5 class="card-title text-left"><b>Honda Brio</b></h5>
                        <p class="card-text text-left"><b>Rp 150.000 / Day</b></p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-primary"><b>5 Seats</b></li>
                            <li class="list-group-item text-primary"><b>1500 CC</b></li>
                            <li class="list-group-item text-primary"><b>Matic</b></li>
                        </ul>

                    </div>
                    <div class="card-footer text-center">
                        <button name="card1" class="btn btn-primary">Book Now</button>
                    </div>
                </div>
            </div>

            <div class="col-md-auto">
                <div class="card">
                    <img src=<?= $img_src[1] ?> class="card-img-top" height="100%">
                    <div class="card-body text-center">
                        <h5 class="card-title text-left"><b>Honda BR-V</b></h5>
                        <p class="card-text text-left"><b>Rp 250.000 / Day</b></p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-primary"><b>7 Seats</b></li>
                            <li class="list-group-item text-primary"><b>1500 CC</b></li>
                            <li class="list-group-item text-primary"><b>Matic</b></li>
                        </ul>

                    </div>
                    <div class="card-footer text-center">
                        <button name="card2" class="btn btn-primary">Book Now</button>
                    </div>
                </div>
            </div>

            <div class="col-md-auto">
                <div class="card">
                    <img src="CIVIC.png" class="card-img-top" width="200" height="150">
                    <div class="card-body text-center">
                        <h5 class="card-title text-left"><b>Honda CIVIC</b></h5>
                        <p class="card-text text-left"><b>Rp 300.000 / Day</b></p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-primary"><b>4 Seats</b></li>
                            <li class="list-group-item text-primary"><b>1500 CC</b></li>
                            <li class="list-group-item text-primary"><b>Matic</b></li>
                        </ul>

                    </div>
                    <div class="card-footer text-center">
                        <button name="card3" class="btn btn-primary">Book Now</button>
                    </div>
                </div>
            </div>

            <footer class="page-footer font-small blue">
                <div class="footer-copyright text-center py-3">Created by DILAN_1202204363</div>
            </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>