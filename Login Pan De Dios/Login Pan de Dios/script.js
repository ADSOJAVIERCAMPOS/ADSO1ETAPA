// Simular BD
let usuariosRegistrados = [{userEmail: 'admin@admin.com', userPassword: 'admin'}, {userEmail: 'user@user.com', userPassword: 'user'}, {userEmail: 'sena@sena.com', userPassword: 'sena'}, {userEmail: '2627060@2627060.com', userPassword: '2627060'}];
document.getElementById('formLogin').addEventListener('submit', function (e){
    e.preventDefault();

    // Obtener los valores usuario y contraseña
    let userEmail = document.getElementById('userEmail').value;
    let userPassword = document.getElementById('userPassword').value;

    // Verificar que las credenciales esten en la BD
    let usuarioValido = usuariosRegistrados.find(function(user){
        return user.userEmail === userEmail && user.userPassword === userPassword;
    });

    if(usuarioValido) {
        window.location.href = "home.html";
    } else {
        let errorMessage = document.getElementById('error-message');
        errorMessage.textContent = 'Usuario o contraseña incorrecto. Por favor, inténtalo de nuevo.'
    }

})

