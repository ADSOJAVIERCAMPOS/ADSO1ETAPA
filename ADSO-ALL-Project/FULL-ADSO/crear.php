<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAVIER CAMPOS</title>
</head>
<body>
    <h1>Bienvenido a Pan de Dios</h1>

    <!-- Contenido actual de tu página -->

<?php
session_start();
include('conexion.php');
if(isset($_SESSION['usuarioingresando']))
{
	header('location: principal.php');
}
?>

<html>
<head>
<title>JAVIER CAMPOS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="FormCajaLogin">

<div class="FormLogin">
<form method="POST">
<h1>Iniciar sesión</h1>
<br>

<div class="TextoCajas">• Ingresar correo</div>
<input type="text" name="txtcorreo" class="CajaTexto" required>

<div class="TextoCajas">• Ingresar password</div>
<input type="password" id="txtpassword" name="txtpassword" class="CajaTexto" required>

<div class="CheckBox1">
<input type="checkbox" onclick="verpassword()" >Mostrar password
</div>

<div>
<input type="submit" value="Iniciar sesión" class="BtnLogin" name="btningresar" >
</div>
<hr>
<br>

<div>
<a href="usuarios_registrar.php" class="BtnRegistrar">Crea nueva cuenta</a>
</div>

</div>
</form>
</div>
 
</body>
<script>

function verpassword()
  {
  var tipo = document.getElementById("txtpassword");
    if(tipo.type == "password")
	  {
        tipo.type = "text";
      }
	  else
	  {
        tipo.type = "password";
      }
  }
</script>
</html>
<?php
if(isset($_POST['btningresar']))
{
$correo = $_POST["txtcorreo"];
$pass 	= $_POST["txtpassword"];

$buscandousu = mysqli_query($conn,"SELECT * FROM usuarios WHERE correo = '".$correo."' and pass = '".$pass."'");
$nr = mysqli_num_rows($buscandousu);

if($nr == 1)
{
$_SESSION['usuarioingresando']=$correo;
header("Location: principal.php");
}
else if ($nr == 0) 
{
echo "<script> alert('Usuario no existe');window.location= 'index.php' </script>";
}

if ($consulta->execute()) {
    echo "Usuario registrado correctamente";
} else {
    echo "Error al registrar el usuario: " . $consulta->error; // Mostrar el error
}

}
?>

<!-- Formulario de registro -->
<h2>Registro de Usuario</h2>
    <form action="registro.php" method="post">
        <input type="text" name="nombre_usuario" placeholder="Nombre de usuario" required>
        <input type="email" name="correo" placeholder="Correo electrónico" required>
        <input type="password" name="contraseña" placeholder="Contraseña" required>
        <button type="submit">Registrarse</button>
    </form>
</body>
</html>


