<?php

include('conexion.php');
include('barra_lateral.php');

$usuarioingresado = $_SESSION['usuarioingresando'];
$buscandousu = mysqli_query($conn,"SELECT * FROM usuarios WHERE correo = '".$usuarioingresado."'");
$mostrar=mysqli_fetch_array($buscandousu);

?>

<html>
<title>JAVIER CAMPOS</title>
<script>
		function verhorafor12() {
			var fecha = new Date();
			var hora = fecha.getHours();
			var minutos = fecha.getMinutes();
			var segundos = fecha.getSeconds();
			var dianoche = "AM";
			if (hora > 12) {
				hora = hora - 12;
				dianoche = "PM";
			}
			if (hora === 0) {
				hora = 12;
			}
			var tothora = hora + ":" + minutos + ":" + segundos + " " + dianoche;
			document.getElementById("hora").innerHTML = tothora;
		}
	</script>
<body onload="setInterval(verhorafor12, 1000);" >
<div class="ContenedorPrincipal">	
<div>
<h1><?php echo "Bienvenido: ".$mostrar['nom'];?></h1>
<h2><?php echo "Correo: ".$mostrar['correo'];?></h2>
<h3>La hora del sistema es: <span id="hora"></span></h3>
</div>
</div>
</body>
</html>