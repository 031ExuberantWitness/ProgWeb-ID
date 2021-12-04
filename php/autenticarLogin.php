<?php
    require('conexion.php');

    $curp = $_POST["lCurp"];
    $clave = $_POST["lClave"];

    $query = mysqli_query($conn, "SELECT * FROM Login WHERE curp = '".$curp."' and clave = '".$clave."'");
    $nr = mysqli_num_rows($query);

    if($nr == 1){
        session_start();

        $_SESSION["crp"] = $curp;
        $_SESSION["clv"] = $clave;

        echo "<script> alert('Bienvenido: $curp'); window.location = '../perfil.php' </script>";
    }else if($nr == 0){
        echo "<script> alert('Error: Curp y/o clave incorrecta.'); window.location = '../login.php' </script>";
    }
?>