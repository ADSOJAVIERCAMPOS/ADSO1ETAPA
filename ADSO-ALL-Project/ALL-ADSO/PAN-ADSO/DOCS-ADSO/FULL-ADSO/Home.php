// Conexión a la base de datos
session_start();

$servidor="localhost";
$db="apijavier";
$username="root";
$password="";

$conn = new mysqli($servername, $username, $password, $dbname);
 

// Verificar la conexión
try {
    $conexion=new PDO("mysql:host=$servidor;bdname=$db",$username,$password);
    echo "conexion exitosa";

} catch (Exception $e) {
    echo "";
}

// Función para iniciar sesión
function login($email, $password) {
    // Verificar si el usuario y la contraseña son válidos
    // Consultar la base de datos para encontrar el usuario con el correo electrónico dado y la contraseña dada
    // Si se encuentra, establecer las variables de sesión y redirigir al usuario a la página de inicio
}

// Función para crear una nueva cuenta
function register($name, $email, $password) {
    // Insertar los datos de la nueva cuenta en la base de datos
}

// Función para recordar contraseña
function forgotPassword($email) {
    // Generar un token único y almacenarlo en la base de datos junto con la dirección de correo electrónico del usuario
    // Enviar un correo electrónico al usuario con un enlace para restablecer la contraseña que incluye el token generado
}

// Verificar si se envió el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    login($email, $password);
}

// Verificar si se envió el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    register($name, $email, $password);
}

// Verificar si se envió el formulario de recuperación de contraseña
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['forgot_password'])) {
    $email = $_POST['email'];
    forgotPassword($email);
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="email" name="email" placeholder="Correo electrónico" required><br>
        <input type="password" name="password" placeholder="Contraseña" required><br>
        <input type="submit" name="login" value="Iniciar sesión">
    </form>

    <h2>Crear cuenta</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="name" placeholder="Nombre" required><br>
        <input type="email" name="email" placeholder="Correo electrónico" required><br>
        <input type="password" name="password" placeholder="Contraseña" required><br>
        <input type="submit" name="register" value="Crear cuenta">
    </form>

    <h2>¿Olvidaste tu contraseña?</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="email" name="email" placeholder="Correo electrónico" required><br>
        <input type="submit" name="forgot_password" value="Recuperar contraseña">
    </form>

    <h2>Acceso directo</h2>
    <a href="url_de_autenticacion_de_google">Acceder con Google</a><br>
    <a href="url_de_autenticacion_de_facebook">Acceder con Facebook</a>
</body>
</html>

";
    
}

?>