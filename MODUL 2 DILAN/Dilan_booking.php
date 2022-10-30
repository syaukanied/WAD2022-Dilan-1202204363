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
                <li class="nav-item">
                    <a class="nav-link" href="Dilan_home.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="">Booking <span class="sr-only"></span></a>
                </li>
            </ul>
        </div>
    </nav>

<?php
$method_selected = '';
$image_selected = '';
$Brio = isset($_POST['card1']);
$BRV = isset($_POST['card2']);
$CIVIC = isset($_POST['card3']);
$img_src = ["Brio.jpg", "BRV.jpg", "CIVIC.png"];

if ($Brio) {
    $method_selected = '
                <select class="custom-select" name="typecar" disabled>
                <option value="Honda Brio">Honda Brio</option>
                <input type="hidden" name="typecar" value="Honda Brio">
                </select>';
    $image_selected = $img_src[0];
} else if ($BRV) {
    $method_selected = '
                <select class="custom-select" name="typecar" disabled>
                <option value="Honda BR-V">Honda BR-V</option>
                <input type="hidden" name="typecar" value="Honda BR-V">
                </select>';
    $image_selected = $img_src[1];
} else if ($CIVIC) {
    $method_selected = '
                <select class="custom-select" name="typecar" disabled>
                <option value="Honda CIVIC">Honda CIVIC</option>
                <input type="hidden" name="typecar" value="Honda CIVIC">
                </select>';
    $image_selected = $img_src[2];

} else {
    $method_selected = '
                <select class="custom-select" name="typecar">
                <option value="Honda Brio">Honda Brio</option>
                <option value="Honda BR-V">Honda BR-V</option>
                <option value="Honda CIVIC">Honda CIVIC</option>
                </select>';
    $image_selected = $img_src[0];
}
?>


<div class="container-fluid">
    <div class="row justify-content-center align-content-center">
        <div class="container">
            <br>
            <br>
            <br>
            <h3 class="text-center">Rent your car now!</h3>
        </div>

        <div class="col-md-4">
            <br>
            <br>
            <img src=<?= $image_selected ?> class="image-preview">
        </div>


        <div class="col-md-auto">
            <br>
            <br>
            <form action="Dilan_my booking.php" method="post">
                <div class="form-group">
                    Name
                    <input type="text" class="form-control" name="name">
                </div>
                <br>
                <div class="form-group">
                    Book Date
                    <input type="date" class="form-control" name="date">
                </div>
                <br>
                <div class="form-group">
                    Start Time
                    <input type="time" class="form-control" name="start">
                </div>
                <br>
                <div class="form-group">
                    Duration(Days)
                    <input type="number" class="form-control" name="duration" aria-describedby="dur_info" value=0>
                </div>
                <br>
                <div class="form-group">
                    Car Type
                    <?= $method_selected ?>
                </div>
                <br>
                <div class="form-group">
                    Phone Number
                    <input type="number" class="form-control" name="no">
                    <br>
                    <div class="form-group">
                            Add Service(s)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="services[]" value="Health protocol"
                                    id="service_check1">
                                Health protocol / Rp25.000
                                <br />
                                <input class="form-check-input" type="checkbox" name="services[]" value="Driver"
                                    id="service_check2">
                                Driver / Rp100.000
                                <br />
                                <input class="form-check-input" type="checkbox" name="services[]" value="Full filled"
                                    id="service_check1">
                                Full Filled / Rp250.000
                            <br/>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" value="Book"></input>
                </div>
            </form>
        </div>

    </div>
</div>

<footer class="page-footer font-small blue">
    <div class="footer-copyright text-center py-3">Created by DILAN_1202204363</div>
</footer>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>