<?php
// Conectar a la base de datos (asegúrate de usar tus propias credenciales)
$conexion = new mysqli("localhost", "root", "", "logincrud1");

// Verificar si la conexión fue exitosa
if ($conexion->connect_error) {
    die("Error al conectar a la base de datos: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$nombre_usuario = $_POST['nombre_usuario'];
$correo = $_POST['correo'];
$contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT); // Hashear la contraseña

// Preparar la consulta SQL para insertar un nuevo usuario
$consulta = $conexion->prepare("INSERT INTO usuarios (nombre_usuario, correo, contraseña) VALUES (?, ?, ?)");
$consulta->bind_param("sss", $nombre_usuario, $correo, $contraseña);

// Ejecutar la consulta
if ($consulta->execute()) {
    echo "Usuario registrado correctamente";
} else {
    echo "Error al registrar el usuario: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>