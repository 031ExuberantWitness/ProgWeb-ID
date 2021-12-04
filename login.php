<html lang="en">
    <head>
		<title>Login</title>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compat" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- Hojas de css-->
		<link rel="stylesheet" href="css/homepage.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/banner.css">
		<link rel="stylesheet" href="css/components.css">
		<link rel="stylesheet" href="css/containers.css">
		<link rel="stylesheet" href="css/login.css">
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

        <!-- Banners -->

        <section class="banner full">
            <article>
                <img src="images/landscape.jpg"/>
                <div class="inner">
                    <header>

						<div class="form">
							<div class="form-toggle"></div>
							<div class="form-panel one">
								<div class="form-header">
									<h1>Inicio de sesión</h1>
								</div>
								<div class="form-content">
									<form action= "php/autenticarLogin.php" method="POST">
										<div class="form-group"><label for="curp">CURP</label>
											<input type="text" id="lCurp" name="lCurp" required="required" /></div>
										<div class="form-group"><label for="clave">Contraseña</label>
											<input type="password" id="lClave" name="lClave" required="required" /></div>
										<div class="form-group">
											<a class="form-recovery" href="registrar.php">Registrar CURP</a></div>
										<div class="form-group">
											<button type="submit" value="Ingresar" name="btnIngresar">Ingresar</button></div>
									</form>
								</div>
								<div class="form-toggle"></div>
							</div>
							</div>
						</div>
                    </header>
                </div>
            </article>
        </section> 

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