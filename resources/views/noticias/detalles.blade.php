<!--<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> @if($noticia != NULL)  {{ $noticia->titulo}} @else  Noticia no encontrada @endif</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
</head>

<body>  
        <a href="{{route("noticias")}}">Volver a noticias</a>
        @if($noticia != NULL)          
        
          <h1>{{ $noticia->titulo}}</h1>
          <p>{{ $noticia->fecha}}</p>
          <h4>{{ $noticia->autor}}</h4>
          @if($noticia->foto != NULL)
          <img src=" {{$noticia->foto}}" <style width="450px" height="auto"></style>
          @endif
          <p>{{ $noticia->cuerpo}}</p>   
        @else
        <h1>Lo sentimos, no se encontro la noticia que buscas</h1>
        
        @endif
</body>
</html>-->


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Detalle de noticias</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/css/icomoon.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/css/magnific-popup.css">
	<!-- Salvattore -->
	<link rel="stylesheet" href="/css/salvattore.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="/css/style.css">
	<!-- Modernizr JS -->
	<script src="/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">					
					<a class="navbar-brand" href="index.html">NOTICIAS</a>		
				</div>
			</div>
		</div>
	</header>
	<!-- END .header -->
	
	
	<div id="fh5co-main">
		<div class="container">
    <a href="{{route("noticias")}}">Volver a noticias</a>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2>{{ $noticia->titulo}}</h2>
					<p>{{ $noticia->fecha}}</p>
					<h3>{{ $noticia->autor}}</h3>
					<div class="fh5co-spacer fh5co-spacer-sm"></div>
					<p>
          @if($noticia->foto != NULL)
          <img src=" {{$noticia->foto}}" class="img-rounded img-responsive" </style>
          @endif</p>

					<p>{{ $noticia->cuerpo}}</p>
				
					
					
				</div>
        	</div>
       </div>
	</div>


	<!-- jQuery -->
	<script src="/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/js/jquery.waypoints.min.js"></script>
	<!-- Magnific Popup -->
	<script src="/js/jquery.magnific-popup.min.js"></script>
	<!-- Salvattore -->
	<script src="/js/salvattore.min.js"></script>
	<!-- Main JS -->
	<script src="/js/main.js"></script>

	

	
	</body>
</html>