<?php 
include("conexion.php");
include("usuarios_tabla.php");

$pagina = $_GET['pag'];
$correo = $_GET['correo'];

$querybuscar = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo = '$correo'");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{
	$usunom 	= $mostrar['nom'];
	$usucorreo 	= $mostrar['correo'];
	$pass 		= $mostrar['pass'];
}
?>
<html>
<body>
<div class="caja_popup2">
<form class="contenedor_popup" method="POST">
<table>
<tr><th colspan="2">Modificar usuario</th></tr>
<tr> 
<td>Nombre</td>
<td><input class="CajaTexto" type="text" name="txtnom" value="<?php echo $usunom;?>" required></td>
</tr>
<tr> 
<td>Correo</td>
<td><input class="CajaTexto" type="email" name="txtcorreo" value="<?php echo $usucorreo;?>" readonly></td>
</tr>
<tr> 
<td>Password</td>
<td><input class="CajaTexto" type="password" name="txtpass" value="<?php echo $pass;?>" required></td>
</tr>
<tr>
				
<td colspan="2">
<?php echo "<a class='BotonesUsuarios' href=\"usuarios_tabla.php?pag=$pagina\">Cancelar</a>";?>
<input class="BotonesUsuarios" type="submit" name="btnmodificar" value="Modificar" onClick="javascript: return confirm('¿Deseas modificar este usuario?');">
</td>
</tr>
</table>
</form>
</div>
</body>
</html>

<?php
	
if(isset($_POST['btnmodificar']))
{    
$nom1 		= $_POST['txtnom'];
$correo1 	= $_POST['txtcorreo'];
$pass1 		= $_POST['txtpass'];
      
$querymodificar = mysqli_query($conn, "UPDATE usuarios SET nom='$nom1',correo='$correo1',pass='$pass1' WHERE correo = '$correo1'");
echo "<script>window.location= 'usuarios_tabla.php?pag=$pagina' </script>";
    
}
?>