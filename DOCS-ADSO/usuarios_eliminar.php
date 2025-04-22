<?php
include("conexion.php");
include("barra_lateral.php");
$usuarioingresado = $_SESSION['usuarioingresando'];
$pagina = $_GET['pag'];
$correo = $_GET['correo'];

if ($correo == $usuarioingresado )
{
echo "<script> alert('No puedes eliminar a tu propio usuario.'); window.location='usuarios_tabla.php' </script>";
}
else
{
mysqli_query($conn, "DELETE FROM usuarios WHERE correo='$correo'");
header("Location:usuarios_tabla.php?pag=$pagina");
}
?>
