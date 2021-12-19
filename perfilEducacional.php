<?php
    include("php/conexion.php");

    session_start();
    $curpS = $_SESSION["crp"];

    $infoCurp = mysqli_query($conn,"SELECT * from informacionescolar where curp = '$curpS'");

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
    
?>

<html lang="en">
    <head>
		<title>Login</title>
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
									<form action="php/actualizarDomiciliaria.php" method="POST">
										<div class="profile-group"><label for="curp">CURP</label>
											<input type="text" id="curp" name="curp" required="required" value="<?php echo $curp;?>"/></div>
                                        <hr>
										<div class="profile-group"><label for="codigoPostal">Codigo postal</label>
											<input type="text" id="nombre" name="codigoPostal" required="required" value="<?php echo $codigoPostal;?>"/></div>
                                        <div class="profile-group"><label for="estado">Estado</label>
											<input type="text" id="apePaterno" name="estado" required="required" value="<?php echo $estado;?>"/></div>
                                        <div class="profile-group"><label for="municipio">Municipio</label>
											<input type="text" id="apeMaterno" name="municipio" required="required" value="<?php echo $municipio;?>"/></div>
                                        <div class="profile-group"><label for="localidad">Localidad</label>
											<input type="text" id="apeMaterno" name="localidad" required="required" value="<?php echo $localidad;?>"/></div>
                                        <hr>
                                        <div class="profile-group"><label for="colonia">Colonia</label>
											<input type="text" id="fechaNac" name="colonia" required="required" value="<?php echo $colonia;?>"/></div>
                                        <div class="profile-group"><label for="calle">Calle</label>
											<input type="text" id="nac" name="calle" required="required" value="<?php echo $calle;?>"/></div>
                                        <div class="profile-group"><label for="numExterior">Número exterior</label>
											<input type="text" id="nacLugar" name="numExterior" required="required" value="<?php echo $numExterior;?>"/></div>
                                        <div class="profile-group"><label for="numInterior">Número interior</label>
											<input type="text" id="telFijo" name="numInterior" required="required" value="<?php echo $numInterior;?>"/></div>
                                        <hr>    
                                            <div class="profile-group"><label for="descripcion">descripción</label>
											<input type="text" id="telMovil" name="descripcion" required="required" value="<?php echo $descripcion;?>"/></div>
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