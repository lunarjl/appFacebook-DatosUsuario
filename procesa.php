<?
//by jose luis luna rubio
require_once('../../src/facebook.php');

$config = array
  (
    'appId' => 'xxxxxxxxxxxx',
    'secret' => 'xxxxxxxxxxxx',
  );

$fb = new facebook($config);

$datos= $fb -> api("/me");

//var_dump($datos);

/*
foreach ($datos["work"] as $dat) 
    {
       //echo "Trabajos: ". $dat["employer"]["id"]. "</br>";
    }
*/
/*

array(14) 
	{ 
		["id"]=> string(15) "100000963921079" 
		["name"]=> string(20) "Jose Luis Luna Rubio" 
		["first_name"]=> string(9) "Jose Luis" 
		["last_name"]=> string(10) "Luna Rubio" 
		["link"]=> string(35) "https://www.facebook.com/jlunarubio" 
		["username"]=> string(10) "jlunarubio" 

		["work"]=> array(2) 
			{ 
				[0]=> array(2) 
					{ 
						["employer"]=> array(2) 
							{ 
								["id"]=> string(15) "119058611517419" 
								["name"]=> string(14) "Chiwis Tronicx" 
							} 
						["start_date"]=> string(7) "0000-00" 
					} 
				[1]=> array(1) 
					{ 
						["employer"]=> array(2) 
							{ 
								["id"]=> string(12) "124793145874" 
								["name"]=> string(9) "OfficeMax" 
							}
					} 
			} 

		["education"]=> array(1) 
			{ 
				[0]=> array(3) 
					{ 
						["school"]=> array(2) 
							{ 
								["id"]=> string(15) "654572201260705" 
								["name"]=> string(42) "Secundaria General Num. 2 Mariano Escobedo" 
							} 
						["type"]=> string(11) "High School" 
						["with"]=> array(1) 
							{ 
								[0]=> array(2) 
									{ 
										["id"]=> string(10) "1246389038" 
										["name"]=> string(12) "Mario MorHÃ©" 
									} 
							} 
					} 
			} 
		["gender"]=> string(4) "male" 
		["email"]=> string(29) "shinigami.ryuk.8910@gmail.com" 
		["timezone"]=> int(-12) 
		["locale"]=> string(5) "es_LA" 
		["verified"]=> bool(true) 
		["updated_time"]=> string(24) "2013-11-18T17:08:29+0000" 
	}
*/
?>


<html>
<head>
	<title>..::Informacion Base Usuario::..</title>
<link rel="stylesheet" type="text/css" href="css/normalize.css">
<link href='http://fonts.googleapis.com/css?family=Days+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<!--Datos Principales-->
	<div id="datosPrincipales">
		<div style="text-align: center">
			<img id="avatar" src="http://graph.facebook.com/<?php echo $datos['id'];?>/picture?width=200&height=200"/>
		</div>
		
		<div id="datosPrincipalesContenedor">
			<span class="txt">ID</span>
				<span class="data">	<?php echo $datos["id"];?></span>
			
			<span class="txt">NOMBRE COMPLETO:</span>
				<span class="data">	<?php echo $datos["name"];?></span>
			
			<span class="txt">NOMBRE(S):</span>
				<span class="data">	<?php echo $datos["first_name"];?></span>
			
			<span class="txt">APELLIDO(S):</span>
				<span class="data">	<?php echo $datos["last_name"];?></span>
			
			<span class="txt">URL:</span>
				<span class="data">	<?php echo $datos["link"];?></span>
			
			<span class="txt">USUARIO:</span>
				<span class="data">	<?php echo $datos["username"];?></span>
			
			<span class="txt">GENERO:</span>
				<span class="data">	<?php echo $datos["gender"];?></span>
			
			<span class="txt">CORREO:</span>
				<span class="data">	<?php echo $datos["email"];?></span>
			
			<span class="txt">ZONA HORARIA:</span>
				<span class="data">	<?php echo $datos["timezone"];?></span>
			
			<span class="txt">LOCALIDAD:</span>
				<span class="data">	<?php echo $datos["locale"];?></span>
			
			<span class="txt">VERIFICADO</span>
				<span class="data">	<?php echo $datos["verified"];?></span>
			
			<span class="txt">ULTIMA ACTUALIZACION:</span>
				<span class="data">	<?php echo $datos["updated_time"];?></span>
		</div><!--/datosPrincipalesContenedor-->
	</div><!--/datosPrincipales-->
	
<!--Educacion-->
	<div id="datosEducacion">
			<span class="txtEncabezado">Educacion</span>
		<div id="datosPrincipalesContenedor">
			<?php foreach ($datos["education"] as $edu) 	{ ?>
	       			<span class="txt">Institucion:</span>
	       			<span class="data"><?php echo $edu["school"]["name"];?></span>

	       			<span class="txt">Nivel/Tipo:</span>
	       			<span class="data"><?php echo $edu["type"];?></span>

	       			<span class="txt">Estudio Con:</span>
	       			<span class="data"><?php echo $edu["with"]["name"];?></span>
	    				<div style="text-align: center"><hr></div>
	    	<?php }	?>
		</div><!--/contenedorSecundario-->
	</div><!--/Educacion-->
	
<!--Trabajos-->
	<div id="datosTrabajos">
		<span class="txtEncabezado">Trabajos</span>

		<div id="datosPrincipalesContenedor">
			<?php foreach ($datos["work"] as $tra) 	{ ?>
	       			<span class="txt">Id:</span>
	       			<span class="data"><?php echo $tra["employer"]["id"];?></span>

	       			<span class="txt">Empresa:</span>
	       			<span class="data"><?php echo $tra["employer"]["name"];?></span>
	    				<div style="text-align: center"><hr></div>
	    	<?php }	?>
		</div><!--/contenedorSecundario-->
	</div><!--Trabajos-->

</body>
</html>