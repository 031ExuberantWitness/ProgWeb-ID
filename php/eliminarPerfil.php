<?php
    require('conexion.php');

    $query = mysqli_query($conn, "DELETE FROM informacionescolar WHERE curp = '".$_POST['curp']."'");
    $query = mysqli_query($conn, "DELETE FROM informaciondomiciliaria WHERE curp = '".$_POST['curp']."'");
    $query = mysqli_query($conn, "DELETE FROM informacion WHERE curp = '".$_POST['curp']."'");

    $query = mysqli_query($conn, "DELETE FROM login WHERE curp = '".$_POST['curp']."'");

    echo "<script> window.location = '../index.php' </script>";
?>