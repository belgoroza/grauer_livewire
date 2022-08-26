<!DOCTYPE html>
	<html class="no-js" lang="en">
	    <head>
	        <meta charset="UTF-8" />
	        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	        <title>Favini Gorozy</title>
	        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
	        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
	        <meta name="author" content="Codrops" />
	        <link rel="shortcut icon" href="{{asset('storage/imagenes/icono/favicon.ico')}}"> 
	        <!-- <link rel="stylesheet" type="text/css" href="css/demo.css" /> -->
	        <link rel="stylesheet" type="text/css" href="{{asset('/modernizr/css/demo.css')}}" />
	        <!-- <link rel="stylesheet" type="text/css" href="css/style4.css" /> -->
	        <link rel="stylesheet" type="text/css" href="{{asset('/modernizr/css/style4.css')}}" />
			<script type="text/javascript" src="{{asset('/modernizr/js/modernizr.custom.86080.js')}}"></script>

			<style>
				
				.enlace {
				    background-color: #4CAF50; /* Green */
				    border: none;
				    color: white;
				    padding: 3px 10px;
				    text-align: center;
				    text-decoration: none;
				    display: inline-block;
				    font-size: 16px;
				    margin: 3px 2px;
				    
				    cursor: pointer;
				    border-radius: 6px;
				}

				.button {
				    background-color: #ffa500; 
				    color: black; 				    
				}

				.button:hover {
				    background-color: black;
				    color: white;
				}
				
			</style>
	    </head>
	    <body id="page">
	        <ul class="cb-slideshow">
	            <li><span>Image 01</span><div><h3>all-applications</h3></div></li>
	            <li><span>Image 02</span><div><h3>in-dus-try</h3></div></li>
	            <li><span>Image 03</span><div><h3>tru-cks</h3></div></li>
	            <li><span>Image 04</span><div><h3>can-tera</h3></div></li>
	            <li><span>Image 05</span><div><h3>auto-bus</h3></div></li>
	            <li><span>Image 06</span><div><h3>unidad-movil</h3></div></li>
	        </ul>
	        <div class="container">
	            
	            <header>
	                <a class="enlace button" href="dashboard">Dashboard</a>
					
						@forelse($secciones as $seccion)
							<a class="enlace button" href="{{route('seccion',$seccion->name)}}">
								{{ ucwords($seccion->name) }}
							</a>
						@empty
							No hay secciones registrada!..
						@endforelse
						<!-- <a href="{{route('seccion','reencauche')}}">Nueva</a>
						<a href="index2.html">Reencauche</a>
						<a href="index3.html">Baterias</a>
						<a class="" href="index4.html">Tubos</a>
						<a class="" href="index4.html">Defensas</a> -->
					
	            </header>
	        </div>
	    </body>
</html>