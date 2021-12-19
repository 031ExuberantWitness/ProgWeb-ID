<?php
    require('conexion.php');

    $infoCurp = mysqli_query($conn,"SELECT * from informaciondomiciliaria where curp = '".$_POST['curp']."'");

    $existeInformacion = "NO";

    while($row = mysqli_fetch_array($infoCurp)){
        $existeInformacion = "SI";
    }

    if($existeInformacion == "SI") {

        $actualizar = mysqli_query($conn,"UPDATE informaciondomiciliaria 
            SET codigoPostal = '".$_POST['codigoPostal']."', 
                estado = '".$_POST['estado']."', 
                municipio = '".$_POST['municipio']."', 
                colonia = '".$_POST['colonia']."', 
                localidad = '".$_POST['localidad']."', 
                calle = '".$_POST['calle']."', 
                NumExterior = '".$_POST['numExterior']."', 
                numInterior = '".$_POST['numInterior']."', 
                descripcion = '".$_POST['descripcion']."'
            WHERE curp = '".$_POST['curp']."'");

            echo "<script> window.location = '../perfil.php' </script>";
    } else {
        $insertar = mysqli_query($conn,"INSERT INTO informaciondomiciliaria 
        (curp, codigoPostal, estado, municipio, colonia, localidad, calle, NumExterior, numInterior, descripcion) 
        VALUES
            ('".$_POST['curp']."',
            '".$_POST['codigoPostal']."', 
            '".$_POST['estado']."', 
            '".$_POST['municipio']."', 
            '".$_POST['colonia']."', 
            '".$_POST['localidad']."', 
            '".$_POST['calle']."', 
            '".$_POST['numExterior']."', 
            '".$_POST['numInterior']."', 
            '".$_POST['descripcion']."')");

        echo "<script> window.location = '../perfil.php' </script>";
    }
