<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctenos</title>
</head>
<body>
    <header>
        <h1>Contáctanos</h1>
    </header>

    <main>
        <section>
            <h2>Dejanos tu mensaje ☻</h2>
            <form action="enviar_mensaje.php" method="post">
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre" required><br><br>
                
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>
                
                <label for="mensaje">Mensaje:</label><br>
                <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br><br>
                
                <input type="submit" value="Enviar Mensaje">
            </form>
        </section>
        
        <section>
            <h2>Siguenos en redes sociales</h2>
            <ul>
                <li><a href="https://www.facebook.com/">Facebook</a></li>
                <li><a href="https://twitter.com/">Twitter</a></li>
                <li><a href="https://www.instagram.com/">Instagram</a></li>
                <li><a href="https://api.whatsapp.com/send?phone=NUMERO_DE_TELEFONO">WhatsApp</a></li>
            </ul>
        </section>
    </main>

    <footer>
        <p>Pan de Dios - Bogota - Colombia</p>
        <p>Teléfono: +1234567890</p>
        <p>Correo electrónico: pandedios@javiercampos.com</p>
    </footer>
</body>
</html>