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
									<form action="php/actualizarPefil.php" method="POST">
										<div class="profile-group"><label for="curp">CURP</label>
											<input type="text" id="curp" name="curp" required="required" value="<?php echo $curp;?>"/></div>
                                        <hr>
										<div class="profile-group"><label for="nombre">Nombre(s)</label>
											<input type="text" id="nombre" name="nombre" required="required" value="<?php echo $nombre;?>"/></div>
                                        <div class="profile-group"><label for="apePaterno">Primer Apellido</label>
											<input type="text" id="apePaterno" name="apePaterno" required="required" value="<?php echo $apePaterno;?>"/></div>
                                        <div class="profile-group"><label for="apeMaterno">Segundo Apellido</label>
											<input type="text" id="apeMaterno" name="apeMaterno" required="required" value="<?php echo $apeMaterno;?>"/></div>
                                        <hr>
                                        <div class="profile-group"><label for="fechaNac">Fecha de Nacimiento</label>
											<input type="text" id="fechaNac" name="fechaNac" required="required" value="<?php echo $fecNac;?>"/></div>
                                        <div class="profile-group"><label for="nac">Nacionalidad</label>
											<input type="text" id="nac" name="nac" required="required" value="<?php echo $Nac;?>"/></div>
                                        <div class="profile-group"><label for="nacLugar">Lugar de nacimiento</label>
											<input type="text" id="nacLugar" name="nacLugar" required="required" value="<?php echo $lugNac;?>"/></div>
                                        <hr>
                                        <div class="profile-group"><label for="telFijo">Télefono fijo (10 digitos)</label>
											<input type="text" id="telFijo" name="telFijo" required="required" value="<?php echo $telFijo;?>"/></div>
                                        <div class="profile-group"><label for="telMovil">Télefono movil (10 digitos)</label>
											<input type="text" id="telMovil" name="telMovil" required="required" value="<?php echo $telMob;?>"/></div>
                                        <div class="profile-group"><label for="estCivil">Estado civil</label>
											<input type="text" id="estCivil" name="estCivil" required="required" value="<?php echo $estCivil;?>"/></div>
                                        <hr>
										<div class="form-group"><button type="btnRegresar">Actualizar / Modificar</button></div>	
									</form>
                                    <form action="php/eliminarPerfil.php" method="POST">
											<input type="hidden" id="curp" name="curp" required="required" value="<?php echo $curp;?>"/></div>
                                        <hr>
                                    <div class="form-group"><button type="btnBorrar">Borrar</button></div>	
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