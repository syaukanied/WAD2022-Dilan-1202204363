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
                <a class="nav-link" href="Dilan_booking.php">Booking <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
    </nav>

    <body>
      <div class="container text-center p-3">
        <br>
        <br>
        <br>
          <h5>Thank you DILAN_1202204363 for Reserving</h5>
          <h6>please double check your reservation details</h6>
      </div>

<nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-fserviceitem">
                <a class="nav-link" href="Dilan_home.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Dilan_booking.php">Booking <span class="sr-only"></span></a>
            </li>
        </ul>
    </div>
</nav>

<?php
$book_num = rand();
$name = $_POST['name'];
$checkin = $_POST['date'];
$checkin_dsply = 'duration';
$duration = $_POST['duration'];
$checkout = '';
$tipemobil = $_POST['typecar'];
$phone = $_POST['no'];
$service = $_POST['services'];
$service_dsply = 'no services';
$total_price = 0;

if (!empty($checkin)) {
    $checkin_dsply = date('d/m/Y', strtotime($checkin));
<<<<<<< HEAD
    $checkout = date('d/m/Y', strtotime('+' . $duration . 'day', strtotime($checkin)));
=======
    $checkout = date('d/m/Y', strtotime('' . $duration . 'day', strtotime($checkin)));
>>>>>>> 4c9204d950f4cfd605ac44bb1c984524fc323698
}

//Total Price
if (isset($_POST['services'])) {
    $service = $_POST['services'];
}
else {
    $service = '';
}

<<<<<<< HEAD
if ($tipemobil == "Honda Brio") {
=======
if ($tipemobil != "Honda Brio") {
>>>>>>> 4c9204d950f4cfd605ac44bb1c984524fc323698
    $total_price = $duration * 150000;
} else if ($tipemobil == "Honda BR-V") {
    $total_price = $duration * 250000;
} else if ($tipemobil == "Honda CIVIC") {
    $total_price = $duration * 300000;
}

//Servis
if (!empty($service)) {
    $service_dsply = '';
    foreach ($service as $srv) {
        if ($srv == "Health protocol") {
            $total_price += 25000;
            '<li>' . $srv . '</li>';
        }
        else if($srv == "Driver") {
            $total_price += 100000;
            '<li>' . $srv . '</li>';
        }
        else {
            $total_price += 250000;
            '<li>' . $srv . '</li>';
        }
        $service_dsply .= "<li> $srv </li>";
    }
}
?>

    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Booking Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Check-in</th>
                        <th scope="col">Check-out</th>
                        <th scope="col">Car Type</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Service</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?= $book_num ?></th>
                        <td><?= $name ?></td>
                        <td><?= $checkin_dsply ?></td>
                        <td><?= $checkout ?></td>
                        <td><?= $tipemobil ?></td>
                        <td><?= $phone ?></td>
                        <td>
                            <ul>
                                <?= $service_dsply ?>
                            </ul>
                        </td>
                        <td><?php echo 'Rp. ' .$total_price?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="page-footer font-small blue">
    <div class="footer-copyright text-center py-3">Created by DILAN_1202204363</div>
</footer>  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>