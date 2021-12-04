<?php
    require('conexion.php');

    $infoCurp = mysqli_query($conn,"SELECT * from informacion where curp = '".$_POST['curp']."'");

    $existeInformacion = "NO";

    while($row = mysqli_fetch_array($infoCurp)){
        $existeInformacion = "SI";
    }

    if($existeInformacion == "SI") {

        $actualizar = mysqli_query($conn,"UPDATE informacion 
            SET nombre = '".$_POST['nombre']."', 
                apePaterno = '".$_POST['apePaterno']."', 
                apeMaterno = '".$_POST['apeMaterno']."', 
                fecNaci = '".$_POST['fechaNac']."', 
                nac = '".$_POST['nac']."', 
                lugNaci = '".$_POST['nacLugar']."', 
                telFijo = '".$_POST['telFijo']."', 
                telMovil = '".$_POST['telMovil']."', 
                estCivil = '".$_POST['estCivil']."'
            WHERE curp = '".$_POST['curp']."'");

            echo "<script> window.location = '../perfil.php' </script>";
    } else {
        $insertar = mysqli_query($conn,"INSERT INTO informacion (curp, nombre, apePaterno, apeMaterno, fecNaci, nac, lugNaci, telFijo, telMovil, estCivil) 
        VALUES
            ('".$_POST['curp']."',
            '".$_POST['nombre']."', 
            '".$_POST['apePaterno']."', 
            '".$_POST['apeMaterno']."', 
            '".$_POST['fechaNac']."', 
            '".$_POST['nac']."', 
            '".$_POST['nacLugar']."', 
            '".$_POST['telFijo']."', 
            '".$_POST['telMovil']."', 
            '".$_POST['estCivil']."')");

        echo "<script> window.location = '../perfil.php' </script>";
    }
?>