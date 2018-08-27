tml>
<head>
<title>
<title>PRACTICA 2 </title>
</head>
<body style="background-color:black;">
<?php
$Evento="   Canelo VS Golovkin";
echo'<h2 style="color:white;" align="center">---------- Bienvenidos a ----------</h2>';
echo'<h1 style="color:white;" align="center">BILLAR BOLA 8</h1>';
echo'<h3 style="color:red;" align="right"> <br>El mejor ambiente: musica en vivo, promociones y mucho mas...</h2>';
echo'<p style="color:white;">---------- VEN Y DIVIERTETE CON NOSOTROS!! ------------</p>';
echo'<img src="pool.jpg"align="right"/>';
echo'<img src="tecate.jpg" align="left"/>';
echo'<br><br>';

echo'<table class="table table-striped" border="1" bordercolor="red" align="left">';
	echo'<thead>';
    echo'<tr>';
	echo'</tr>';
	 echo'<tr>';
	echo'<th style="color:white;"> Juegos </th><th style="color:white;"> Precios </th>';
	echo'</tr>';
	echo'</thead>';
	echo'<tbody>';

	$Juegos = array(
	"Pool" => "30.00",
    "Carambola" => "30.00",
	"Domino"=>"15.00",
	"Baraja"=>"15.00",
	"Ajedrez"=>"20.00");
	
	while (list($clave, $valor) = each($Juegos)) {
    echo '<tr> <td style="color:white;">';
	echo"$clave";
	echo'</td><td style="color:white;">';
	echo"$valor";
	echo'</td></tr>';
	}
	echo'</tbody>';
	echo'</table>';
	
echo'<p style="color:white;">';
echo $Evento;
echo'</p>';

echo'<img src="pelea.jpg" align="left"/>';
?>
</body>
</html>

