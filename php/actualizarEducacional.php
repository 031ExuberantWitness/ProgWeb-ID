<?php
    require('conexion.php');

    $infoCurp = mysqli_query($conn,"SELECT * from informacionescolar where curp = '".$_POST['curp']."'");

    $existeInformacion = "NO";

    while($row = mysqli_fetch_array($infoCurp)){
        $existeInformacion = "SI";
    }

    if($existeInformacion == "SI") {

        $actualizar = mysqli_query($conn,"UPDATE informacionescolar 
            SET
                estudia = '".$_POST['estudia']."', 
                nivelActual = '".$_POST['nivelActual']."', 
                nivelMax = '".$_POST['nivelMax']."', 
                estaBecado = '".$_POST['estaBecado']."', 
                periodo = '".$_POST['periodo']."', 
                institucion = '".$_POST['institucion']."', 
                plantel = '".$_POST['plantel']."', 
                carrera = '".$_POST['carrera']."',
                gradoAcademico = '".$_POST['gradoAcademico']."', 
                estatus = '".$_POST['estatus']."', 
                kinder = '".$_POST['kinder']."', 
                escPrimaria = '".$_POST['escPrimaria']."', 
                escSecundaria = '".$_POST['escSecundaria']."', 
                preparatoria = '".$_POST['preparatoria']."', 
                universidad = '".$_POST['universidad']."', 
                maestria = '".$_POST['maestria']."', 
                doctorado = '".$_POST['doctorado']."'      
            WHERE curp = '".$_POST['curp']."'");

            echo "<script> window.location = '../perfil.php' </script>";
    } else {
        $insertar = mysqli_query($conn,"INSERT INTO informacionescolar 
        (curp,estudia, nivelActual, nivelMax,estaBecado, periodo, institucion, plantel, carrera, gradoAcademico, estatus, kinder,escPrimaria,escSecundaria,preparatoria,universidad,maestria,doctorado) 
        VALUES
            (   '".$_POST['curp']."',
                '".$_POST['estudia']."', 
                '".$_POST['nivelActual']."', 
                '".$_POST['nivelMax']."', 
                '".$_POST['estaBecado']."', 
                '".$_POST['periodo']."', 
                '".$_POST['institucion']."', 
                '".$_POST['plantel']."', 
                '".$_POST['carrera']."',
                '".$_POST['gradoAcademico']."', 
                '".$_POST['estatus']."', 
                '".$_POST['kinder']."', 
                '".$_POST['escPrimaria']."', 
                '".$_POST['escSecundaria']."', 
                '".$_POST['preparatoria']."', 
                '".$_POST['universidad']."', 
                '".$_POST['maestria']."', 
                '".$_POST['doctorado']."' )");
        
        echo "<script> window.location = '../perfil.php' </script>";
    }
