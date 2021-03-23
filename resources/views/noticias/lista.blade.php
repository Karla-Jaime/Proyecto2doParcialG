<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
</head>
<body>
    <h1>Noticias</h1>
    @foreach($noticias as $noticia)
        <h3><a href="{{route("noticias.detalles", $noticia->id)}}">{{ $noticia->titulo }}</a></h3>
        <p>{{ $noticia->fecha }}</p>
        <p>{{ $noticia->autor}}</p>
    @endforeach
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
	<title>Lista de noticias</title>
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
					
					<a class="navbar-brand" href="index.html">Noticias</a>		
				</div>
			</div>
		</div>
	</header>
	<!-- END .header -->
	
	<div id="fh5co-main">
    
		<div class="container">
		<div class="container-fluid">
		    <div class="row">
            @foreach($noticias as $noticia)
            <div id="fh5co-board" data-columns >
           
			<div class="column size-1">
        	<div class="item">
           
        		<div class="animate-box">
	        		<a href="images/img_1.jpg" class="image-popup fh5co-board-img" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, eos?"><img src="images/img_1.jpg" alt="Free HTML5 Bootstrap template"></a>
        		</div>
        		<div class="fh5co-desc">
					<h3><a href="{{route("noticias.detalles", $noticia->id)}}">{{ $noticia->titulo }}</a></h3>
					<p>{{ $noticia->fecha }}</p>
                    <p>{{ $noticia->autor}}</p></div>
			</div>
              @endforeach       
			  </div>
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