<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Juego de conocimientos | UTPL</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">


   <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Menú</span> Menú <i class="fa fa-bars"></i>
                </button>
               <a href="#.html"><img class="img-responsive" src="img/logo3.svg" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
					<li class="page-scroll">
						<a href="inicio">Inicio</a>
					</li>
					 <li class="page-scroll">
						<a href="#jugar">Jugar</a>
					</li>
					<li class="page-scroll">
						<a href="inicio">Nosotros</a>
					</li>
					<li class="page-scroll">
						<a href="inicio">Contacto</a>
					</li>					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header style=" background-image: url('img/confusing-background.png'); width: 100%; height:100%; background-repeat:no-repeat; background-position:center;">
        <div class="container" id="jugar" >
            <div class="row">
				<div class="intro-text">


					<span class="name">Selecciona el nivel</span>
					  <hr class="star-light">
					
					<!-- BOTONES DE NIVELES -->
					<?php 
						include ('categorias.php');
					?>
					<!-- FIN BOTONES DE NIVELES -->

					</div>
				</div>
			</div>
		
    </header>



    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Ubicación</h3>
						MediaLab | UTPL <br>
						Cdla. San Cayetano, Calle París s/n <br>
						Loja – Ecuador
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Redes sociales</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/utpl.loja/" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>

                            <li>
                                <a href="https://twitter.com/utpl" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>

                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Acerca de</h3>
                        ccortiz@utpl.com<br>
						Teléfono (593) (07) 258-8668 ext. 138
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; UTPL 2016. Powered by: <a href="http://chilalito.com/" style="color:white; font-weight:bold; text-decoration:underline">chilalito C.L.</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>



    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
