<?php
    include("php/conexion.php");

    session_start();
    $curpS = $_SESSION["crp"];

    $infoCurp = mysqli_query($conn,"SELECT * from informacionescolar where curp = '$curpS'");

    $curp = $curpS;
	$estudia = "";
	$nivelActual = "";
	$nivelMax = "";
	$estaBecado = "";
	$periodo = "";
	$institucion = "";
	$plantel = "";
	$carrera = "";
	$gradoAcademico = "";
	$estatus = "";
	$kinder = "";
	$escPrimaria = "";
	$escSecundaria = "";
	$preparatoria = "";
	$universidad = "";
	$maestria = "";
	$doctorado = "";

    while($row = mysqli_fetch_array($infoCurp)){
		$estudia  = $row["estudia"];
		$nivelActual  = $row["nivelActual"];
		$nivelMax  = $row["nivelMax"];
		$estaBecado  = $row["estaBecado"];
		$periodo  = $row["periodo"];
		$institucion  = $row["institucion"];
		$plantel  = $row["plantel"];
		$carrera  = $row["carrera"];
		$gradoAcademico  = $row["gradoAcademico"];
		$estatus  = $row["estatus"];
		$kinder  = $row["kinder"];
		$escPrimaria  = $row["escPrimaria"];
		$escSecundaria  = $row["escSecundaria"];
		$preparatoria  = $row["preparatoria"];
		$universidad  = $row["universidad"];
		$maestria  = $row["maestria"];
		$doctorado  = $row["doctorado"];
    }
?>

<html lang="en">
    <head>
		<title>Editar información</title>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compat" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- Hojas de css-->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="css/homepage.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/banner.css">
		<link rel="stylesheet" href="css/components.css">
		<link rel="stylesheet" href="css/containers.css">
		<link rel="stylesheet" href="css/footer.css">
    </head>
    <body>

        <!-- Encabezado -->
        <header id="header" class="alt">    
            <div class="logo"><a href="index.php">Gobierno del Estado <span>Nayarit, Mexico</span></a></div>
			<a href="#menu">Menu</a>
		</header>
        
		<!-- Menu -->
		<nav id="menu">
			<ul class="links">
				<img src="images/logo-tepic.png"/>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="perfil.php">Perfil (oculto)</a></li>
				<li><a href="login.php">Iniciar sesión</a></li>
				<li><a href="login.php">Identidad (NID)</a></li>
				<li><a href="login.php">Votación en linea</a></li>
				<li><a href="login.php">Salud</a></li>
				<li><a href="login.php">Participación ciudadana</a></li>
				<li><a href="login.php">Servicios publicos</a></li>
				<li><a href="login.php">Servicios de información</a></li>
				<li><a href="login.php">Servicios educativos</a></li>
				<li><a href="login.php">Oportunidad de empleo</a></li>
				<li><a href="login.php">Turismo</a></li>
				<li><a href="login.php">Seguridad y protección</a></li>
				<li><a href="login.php">Transporte publico</a></li>
				<li><a href="login.php">Medio ambiente</a></li>
				<li><a href="login.php">Ciencia y tecnologia</a></li>
				<li><a href="login.php">Administración, planeación y finanzas</a></li>
				<li><a href="login.php">Servicios comerciales</a></li>
				<li><a href="login.php">Obras públicas</a></li>
			</ul>
		</nav>

        <!-- Contenido -->

        <section class="banner full">
            <article>
                <img src="images/landscape.jpg"/>
                <div class="inner">
                    <header>

						<div class="profile">
							<div class="profile-toggle"></div>
							<div class="profile-panel one">
								<div class="profile-header">
									<h1>Información del usuario</h1>
								</div>
								<div class="profile-content">
									<form action="php/actualizarEducacional.php" method="POST">
										<div class="profile-group"><label for="curp">CURP</label>
											<input type="text" id="curp" name="curp" required="required" value="<?php echo $curp;?>"/></div>
                                        <hr>
										<div class="profile-group"><label for="estudia">Estudia</label>
											<input type="text" id="nombre" name="estudia" required="required" value="<?php echo $estudia;?>"/></div>
                                        <hr>
										<div class="profile-group"><label for="nivelActual">Nivel actual cursando</label>
											<input type="text" id="apePaterno" name="nivelActual" required="required" value="<?php echo $nivelActual;?>"/></div>
                                        <div class="profile-group"><label for="nivelMax">Nivel maximo actual</label>
											<input type="text" id="apeMaterno" name="nivelMax" required="required" value="<?php echo $nivelMax;?>"/></div>
										<hr>
										<div class="profile-group"><label for="estaBecado">¿Esta becado?</label>
											<input type="text" id="apeMaterno" name="estaBecado" required="required" value="<?php echo $estaBecado;?>"/></div>
                                        <hr>
                                        <div class="profile-group"><label for="periodo">Periodo</label>
											<input type="text" id="fechaNac" name="periodo" required="required" value="<?php echo $institucion;?>"/></div>
										<div class="profile-group"><label for="institucion">Institución</label>
											<input type="text" id="fechaNac" name="institucion" required="required" value="<?php echo $institucion;?>"/></div>
                                        <div class="profile-group"><label for="plantel">Plantel</label>
											<input type="text" id="nac" name="plantel" required="required" value="<?php echo $plantel;?>"/></div>
                                        <div class="profile-group"><label for="carrera">Carrera</label>
											<input type="text" id="nacLugar" name="carrera" required="required" value="<?php echo $carrera;?>"/></div>
                                        <div class="profile-group"><label for="gradoAcademico">Grado Academico</label>
											<input type="text" id="telFijo" name="gradoAcademico" required="required" value="<?php echo $gradoAcademico;?>"/></div>
                                        <div class="profile-group"><label for="estatus">Estatus</label>
											<input type="text" id="telMovil" name="estatus" required="required" value="<?php echo $estatus;?>"/></div>
                                        <hr>
                                        <div class="profile-group"><label for="kinder">Kinder</label>
											<input type="text" id="fechaNac" name="kinder" required="required" value="<?php echo $kinder;?>"/></div>
                                        <div class="profile-group"><label for="escPrimaria">Escuela Primaria</label>
											<input type="text" id="nac" name="escPrimaria" required="required" value="<?php echo $escPrimaria;?>"/></div>
                                        <div class="profile-group"><label for="escSecundaria">Escuela Secundaria</label>
											<input type="text" id="nacLugar" name="escSecundaria" required="required" value="<?php echo $escSecundaria;?>"/></div>
                                        <div class="profile-group"><label for="preparatoria">Preparatoria</label>
											<input type="text" id="telFijo" name="preparatoria" required="required" value="<?php echo $preparatoria;?>"/></div>
                                        <div class="profile-group"><label for="universidad">Universidad</label>
											<input type="text" id="telMovil" name="universidad" required="required" value="<?php echo $universidad;?>"/></div>
										<div class="profile-group"><label for="maestria">Maestria</label>
											<input type="text" id="telMovil" name="maestria" required="required" value="<?php echo $maestria;?>"/></div>
										<div class="profile-group"><label for="doctorado">Doctorado</label>
											<input type="text" id="telMovil" name="doctorado" required="required" value="<?php echo $doctorado;?>"/></div>
										<hr>
										<div class="form-group"><button type="btnRegresar">Actualizar / Modificar</button></div>	
									</form>
								</div>
							</div>
						</div>
                    </header>
                </div>
            </article>
        </section>  

        <!-- Scripts -->
		<script src="js\jquery.min.js"></script>
		<script src="js\jquery.scrollex.min.js"></script>
		<script src="js\skel.min.js"></script>
		<script src="js\util.js"></script>
		<script src="js\main.js"></script>
		<script src="js\login.js"></script>

    </body>
</html>