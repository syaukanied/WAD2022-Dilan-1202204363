<?php
    require './connector.php';

    $id_mobil = rand();
    $nama_mobil = $_POST['nama_mobil'];
    $pemilik = $_POST['pemilik'];
    $merk = $_POST['merk'];
    $tanggal = $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];
    $status = $_POST['status'];
    $foto_mobil = $_FILES['foto_mobil']['name'];
    $target = "../img/";

    if (move_uploaded_file($_FILES['foto_mobil']['tmp_name'], $target . $foto_mobil)) {
        $sql = "INSERT INTO showroom_dilan_table (id_mobil, nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) 
        VALUES ('$id_mobil','$nama_mobil', '$pemilik', '$merk', '$tanggal', '$deskripsi', '$foto_mobil', '$status')";
        
        if (mysqli_query($connect, $sql)) {
            header("location: ../Home_Dilan.php");
            } else {
                echo "Gagal";
            }
        } else {
            echo "Gagal";
        }
?>