<?php
    include("php/conexion.php");

    session_start();
    $curpS = $_SESSION["crp"];

    $infoCurp = mysqli_query($conn,"SELECT * from informacion where curp = '$curpS'");

    $curp = $curpS;
    $nombre = "";
    $apePaterno = "";
    $apeMaterno = "";
    $fecNac = "";
    $Nac = "";
    $lugNac = "";
    $telFijo = "";
    $telMob = "";
    $estCivil = "";
	$imagen = "";

    while($row = mysqli_fetch_array($infoCurp)){
        $nombre = $row["nombre"];
        $apePaterno = $row["apePaterno"];
        $apeMaterno = $row["apeMaterno"];
        $fecNac = $row["fecNaci"];
        $Nac = $row["nac"];
        $lugNac = $row["lugNaci"];
        $telFijo = $row["telFijo"];
        $telMob = $row["telMovil"];
        $estCivil = $row["estCivil"]; 
		$imagen = $row["imagen"];  
    }

	$infoCurp = mysqli_query($conn,"SELECT * from informaciondomiciliaria where curp = '$curpS'");

    $curp = $curpS;
    $codigoPostal  = "";
    $estado        = "";
    $municipio     = "";
    $colonia     = "";
    $localidad       = "";
    $calle         = "";
    $numExterior   = "";
    $numInterior   = "";
    $descripcion   = "";

    while($row = mysqli_fetch_array($infoCurp)){
        $codigoPostal = $row["codigoPostal"];
        $estado = $row["estado"];
        $municipio = $row["municipio"];
        $colonia = $row["colonia"];
        $localidad = $row["localidad"];
        $calle = $row["calle"];
        $numExterior = $row["numExterior"];
        $numInterior = $row["numInterior"];
        $descripcion = $row["descripcion"];  
    }
    
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
		<title>Perfil</title>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compat" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- Hojas de css-->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/banner.css">
		<link rel="stylesheet" href="css/virtual.css">
		<link rel="stylesheet" href="css/components.css">
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
                <img src=""/>
                <div class="inner">
                    <header>
						<header>
							<p>LA INFORMACIÓN ESTA SUJETA A UN CONTRATO DE PRIVACIDAD</a></p>
							<br>
							<h2>INFORMACIÓN PERSONAL</h2>
						</header>
		            </header>
                </div>
            </article>
        </section>  
						
		<div class="vg-page page-about" id="about">
			<div class="container py-5">
				<div class="row">
					<div class="col-lg-4 py-3">
						<div class="img-place wow fadeInUp">
							<img src="images/np.png" alt="">
						</div>
						<br>
					</div>
					<div class="col-lg-6 offset-lg-1 wow fadeInRight">
						<h1 class="fw-light"><?php echo $nombre; $apePaterno; $apeMaterno;?></h1>
						<h5 class="fg-theme mb-3"><?php echo $curp;?></h5>
						<ul class="theme-list">
							<li><b>Fecha Nacimiento:</b> <?php echo $fecNac;?></li>
							<li><b>Nacionalidad:</b> <?php echo $Nac;?></li>
							<li><b>Lugar de Nacimiento:</b> <?php echo $lugNac;?></li>
							<li><br></li>
							<li><b>Télefono fijo (10 digitos):</b> <?php echo $telFijo;?></li>
							<li><b>Télefono movil (10 digitos):</b> <?php echo $telMob;?></li>
							<li><b>Estado Civil:</b> <?php echo $estCivil;?></li>
						</ul>
						<button class="btn btn-theme-outline" onclick="window.location.href='perfilInformacion.php'">Editar</button>
					</div>
				</div>
		</div>

		<div class="container pt-5">
			<div class="row">
				<div class="col-md-6 wow fadeInRight">
					<h2 class="fw-normal">Información domiciliaria</h2>
					<ul class="timeline mt-4 pr-md-5">
						<li>
							<div class="title">Geografica</div>
							<div class="details">
								<h5>Codigo postal</h5>
								<p><?php echo $codigoPostal;?></p>
								<br>
								<h5>Estado</h5>
								<p><?php echo $estado;?></p>
								<br>
								<h5>Municipio</h5>
								<p><?php echo $municipio;?></p>
								<br>
								<h5>Localidad</h5>
								<p><?php echo $localidad;?></p>
							</div>
						</li>
						<li>
							<div class="title">Domiciliaria</div>
							<div class="details">
								<h5>Colonia</h5>
								<p><?php echo $colonia;?></p>
								<br>
								<h5>Calle</h5>
								<p><?php echo $calle;?></p>
								<br>
								<h5>Número exterior</h5>
								<p><?php echo $numExterior;?></p>
								<br>
								<h5>Número interior</h5>
								<p><?php echo $numInterior;?></p>
							</div>
						</li>
						<li>
							<div class="title">Descripción</div>
							<div class="details">
								<h5>Detalles de la ubicación residente actual</h5>
								<p><?php echo $descripcion;?></p>
							</div>
						</li>
						<button class="btn btn-theme-outline" onclick="window.location.href='perfilDomiciliaria.php'">Editar</button>
					</ul>
				</div>
				<div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">
					<h2 class="fw-normal">Información educacional</h2>
					<ul class="timeline mt-4 pr-md-5">
						<li>
							<div class="title">Estado actual</div>
							<div class="details">
								<h5>¿Estudia?</h5>
								<p><?php echo $estudia;?></p>
								<br>
								<h5>Nivel actual cursando</h5>
								<p><?php echo $nivelActual;?></p>
								<br>
								<h5>Nivel maximo de estudios</h5>
								<p><?php echo $nivelMax;?></p>
								<br>
								<h5>¿Esta becado?</h5>
								<p><?php echo $estaBecado;?></p>
							</div>
						</li>
						<li>
							<div class="title">Nivel en curso</div>
							<div class="details">
								<h5>Periodo</h5>
								<p><?php echo $periodo;?></p>
								<br>
								<h5>Institución</h5>
								<p><?php echo $institucion;?></p>
								<br>
								<h5>Planel</h5>
								<p><?php echo $plantel;?></p>
								<br>
								<h5>Carrera</h5>
								<p><?php echo $carrera;?></p>
								<br>
								<h5>Grado académico</h5>
								<p><?php echo $gradoAcademico;?></p>
								<br>
								<h5>Estatus</h5>
								<p><?php echo $estatus;?></p>
							</div>
						</li>
						<li>
							<div class="title">Historial academico</div>
							<div class="details">
								<h5>Kinder</h5>
								<p><?php echo $kinder;?></p>
								<br>
								<h5>Escuela primaria</h5>
								<p><?php echo $escPrimaria;?></p>
								<br>
								<h5>Escuela segundaria</h5>
								<p><?php echo $escSecundaria;?></p>
								<br>
								<h5>Preparatoria</h5>
								<p><?php echo $preparatoria;?></p>
								<br>
								<h5>Universidad</h5>
								<p><?php echo $universidad;?></p>
								<br>
								<h5>Maestria</h5>
								<p><?php echo $maestria;?></p>
								<br>
								<h5>Doctorado</h5>
								<p><?php echo $doctorado;?></p>
							</div>
						</li>
						<button class="btn btn-theme-outline" onclick="window.location.href='perfilEducacional.php'">Editar</button>
					</ul>
				</div>
			</div>
		</div>
		</div>

		<!-- Pie de pagina -->
		<footer id="footer">
			<div class="inner">
				<div class="copyright"> 
					H. XLII Ayuntamiento de Tepic, Derechos Reservados 2021 - 2024
					<a href="http://tepic.gob.mx/wp-content/uploads/2019/02/AVISO_DE_PRIVACIDAD_INTEGRAL_AYUNTAMIENTO_DE_TEPIC_Ver_1.1.pdf"><span> Aviso de Privacidad Integral, </span></a>
					<a href="http://tepic.gob.mx/wp-content/uploads/2019/02/AVISO_DE_PRIVACIDAD_SIMPLIFICADO_AYUNTAMIENTO_DE_TEPIC_Ver_1.1.pdf"><span> Aviso de Privacidad Simplificado, </span></a>
					<a href="http://tepic.gob.mx/transparencia/archivos/2018/03/1520545101_aviso_de_privacidad_simplificado_ayuntamiento_de_tepic.pdf"><span> Formato Derechos Arco</span></a>
				</div>
			</div>
		</footer>

        <!-- Scripts -->
		<script src="js\jquery.min.js"></script>
		<script src="js\jquery.scrollex.min.js"></script>
		<script src="js\skel.min.js"></script>
		<script src="js\util.js"></script>
		<script src="js\main.js"></script>
		<script src="js\login.js"></script>
    </body>
</html>