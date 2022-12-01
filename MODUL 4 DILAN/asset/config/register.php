<?php
    require './connector.php';

    $id = rand();
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $noHP = $_POST['hp'];
    $sandi = $_POST['password'];
    $sandi2 = $_POST['password2'];

    if($sandi == $sandi2){
        $query = mysqli_query($connect, "INSERT users_dilan (id, nama, email, password, no_hp) 
        VALUES ('$id','$name', '$email', '$sandi', '$noHP')");
    if(!$query){
        setcookie('nama', $name, time()+86400*30, '/' );
        setcookie('email', $email, time()+86400*30, '/' );
        setcookie('password', $sandi, time()+86400*30, '/' );
        setcookie('noHP', $noHP, time()+86400*30, '/' );
        header('location: ../Login_Dilan.php');
    }else{
        echo 'password salah';
    }
    
    }
?>