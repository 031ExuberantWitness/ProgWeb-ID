<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "gob_frame";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(!$conn){
        die("Error: No hay conexión".mysqli_connect_error());
    }

    $curp = $_POST["rCurp"];
    $clave = $_POST["rClave"];
    $cclave = $_POST["rCClave"];
    $correo = $_POST["rClave"];

    $sqlgrabar = "INSERT INTO login(curp, clave, correo) values ('$curp', '$clave', '$correo')";

    if(mysqli_query($conn, $sqlgrabar)){
        echo "<script> alert('CURP exitosamente registrado: $curp'); window.location = 'login.html' </script>";
    }else{
        echo "<script> alert('Error: No se pudo registrar el curp, intente de nuevo.'); window.location = 'login.html' </script>";
    }
?>