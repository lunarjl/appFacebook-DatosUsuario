<?php
require_once('../../src/facebook.php');
$config = array
  (
    'appId' => 'xxxxxxxxxxxx',
    'secret' => 'xxxxxxxxxxxx',
  );
$fb = new facebook($config);
$parametros=array(	
	'redirect_uri'	=>	'http://joseluislunarubio.net/apiFace/miniAplicaciones/DatosBasicos/procesa.php',
	);
$url= $fb->getLoginUrl($parametros);
?>
<html>
<head>
	<title>..::Acceso Datos Usuario::..</title>

<link rel="stylesheet" type="text/css" href="css/normalize.css">
<link href='http://fonts.googleapis.com/css?family=Skranji' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<div id="header">API-Informacion Basica Del Usuario-</div>
	<div id="recuadro">
		<span class="titulo">App  -Informacion- </span>
			<a href="<?php echo $url;?>"><button>Acceder</button></a>
		<span class="explicacion">
			Aplicacion que tiene accedo a la informacion publica del perfil de usuario, como nombre, sexo, link del perfil entre otras,
			en este caso no hay necesidad de pedir permisos especiales por parte del usuario.
		</span>
		<span class="descripcion">
			Primero deberas de darme autorizacion para poder interactuar con tu usuario de fb
		</span>

	</div>
	<div id="footer"></div>
</body>
</html>
