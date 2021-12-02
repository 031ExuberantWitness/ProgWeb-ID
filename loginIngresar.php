<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "gob_frame";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(!$conn){
        die("Error: No hay conexión".mysqli_connect_error());
    }

    $curp = $_POST["lCurp"];
    $clave = $_POST["lClave"];

    $query = mysqli_query($conn, "SELECT * FROM Login WHERE curp = '".$curp."' and clave = '".$clave."'");
    $nr = mysqli_num_rows($query);

    if($nr == 1){
        echo "<script> alert('Bienvenido: $curp'); window.location = 'index.html' </script>";
    }else if($nr == 0){
        echo "<script> alert('Error: Curp y/o clave incorrecta.'); window.location = 'login.html' </script>";
    }
?>