const mysql = require('mysql');
const conexion = mysql.createConexion({
    host: 'localhost',
    user: 'root',
    password: '',
    port: 33066,
    database: 'apijavier',
});

conexion.connect((err) => {
    if (err) {
        console.log('error conectando con la base de datos' + err)
    } else {
        console.log('la base de datos esta conectada')
    }
});

module.exports = conexion;