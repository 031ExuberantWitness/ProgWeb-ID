<html lang="en">
    <head>
		<title>Gobierno del estado</title>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compat" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- Hojas de css-->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="css/homepage.css">
		<link rel="stylesheet" href="css/components.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/banner.css">
		<link rel="stylesheet" href="css/containers.css">
		<link rel="stylesheet" href="css/footer.css">
    </head>
    <body>

        <!-- Encabezado -->
        <header id="header" class="alt">    
            <div class="logo"><a href="index.php">Gobierno del Estado <span>Nayarit, Mexico</span></a></div>
			<a href="#menu">Menu</a>
			<?php
				session_start();
				$curpS = $_SESSION["crp"];
				?>
				<a><?php echo $curpS ?></a>
				<?php
			?>
			
			
		</header>

		<!-- Menu -->
		<nav id="menu">
			<ul class="links">
				<img src="images/logo-tepic.png"/>
				<li><a href="index.php">Inicio</a></li>
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
			<?php
				include("php/conexion.php");

				$banner = mysqli_query($conn,"SELECT * from noticias");

				$titulo = "";
				$descripcion = "";
				$imagen = "";

				while($row = mysqli_fetch_array($banner)){
					$titulo = $row["titulo"];
					$descripcion = $row["descripcion"];
					$imagen = $row["imagen"];
					?>

					<article>
						<img src='<?php echo $imagen;?>'/>
							<div class='inner'>
							<header>
								<p><?php echo $descripcion;?></a></p>
								<h2><?php echo $titulo;?></h2>
							</header>
						</div>
					</article>

					<?php
				}
			?>
        </section> 
        
        <!-- Contenido -->
        <section class="wrapper style1">
			<div class="inner">
				<div class="grid-style">
					<div>
						<div class="box">
							<div class="image fit">
						</div>
						<div class="content">
							<header class="align-center">
							<a NAME = "CajaPrueba"></a>
								<p>Contenido prueba</p>
								<h2>Contenido pruebas</h2>
							</header>
							<CENTER>		
							<p><button class="wrapperStyle1Button"><A HREF = "index.php"><FONT COLOR = "cc9516"><span>TER</span> </button>
							</CENTER>
							<footer class="align-center">
								<class="button alt"><FONT COLOR = "black">LA INFORMACI&OacuteN ESTA SUJETA A UN CONTRATO DE PRIVACIDAD</a></font>
						    </footer>
						</div>	
                    </div>
				</div>
            </div>

			
        </section>     

		<section class="wrapper divider">
			<div class="inner">
				<header class="align-center">
					<p>Tepic no es un ranch- ah chinga, se me escapo mi vaca</p>
					<h2>Tepic, Nayarit</h2>
				</header>
			</div>
		</section>

		<section class="wrapper style1">
			<div class="inner">
				<div class="grid-style">
					<div>
						<div class="box">
							<div class="image fit">
						</div>
						<div class="content">
							<header class="align-center">
							<a NAME = "CajaPrueba"></a>
								<p>Contenido prueba</p>
								<h2>Contenido pruebas</h2>
							</header>
							<CENTER>		
							<p><button class="wrapperStyle2Button"><A HREF = "index.php"><FONT COLOR = "cc9516"><span>TER</span> </button>
							</CENTER>
							<footer class="align-center">
								<class="button alt"><FONT COLOR = "black">LA INFORMACI&OacuteN ESTA SUJETA A UN CONTRATO DE PRIVACIDAD</a></font>
						    </footer>
                     </div>
				</div>
            </div>
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
		

    </body>
</html>