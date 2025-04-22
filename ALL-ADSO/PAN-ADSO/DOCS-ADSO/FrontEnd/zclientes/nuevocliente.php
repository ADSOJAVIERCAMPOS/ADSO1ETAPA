<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>CLIENTES PAN DE DIOS</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      width: 80%;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="date"],
    select {
      width: 100%;
      padding: 10px;
      margin: 5px 0;
      border-radius: 3px;
      border: 1px solid #ccc;
    }

    input[type="submit"],
    input[type="button"] {
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
    }

    input[type="submit"]:hover,
    input[type="button"]:hover {
      background-color: #0056b3;
    }

    table {
      width: 100%;
      margin-top: 20px;
      border-collapse: collapse;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>CLIENTES PAN DE DIOS</h2>
    <form id="contact-form">
      <input type="hidden" id="id">
      <input type="text" id="nombre" placeholder="Nombre" required><br>
      <input type="text" id="apellido" placeholder="Apellido" required><br>
      <select id="genero" required>
        <option value="">Selecciona género</option>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
        <option value="Otro">Otro</option>
      </select><br>
      <input type="email" id="email" placeholder="Correo electrónico" required><br>
      <input type="tel" id="telefono" placeholder="Teléfono" required><br>
      <input type="date" id="fechaNacimiento" required><br>
      <input type="submit" value="Guardar">
      <input type="button" value="Limpiar" onclick="limpiarFormulario()">
    </form>
    <table id="contactos">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Género</th>
          <th>Correo electrónico</th>
          <th>Teléfono</th>
          <th>Fecha de Nacimiento</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <!-- Los registros se cargarán aquí -->
      </tbody>
    </table>
  </div>

  <script>
    const form = document.getElementById('contact-form');
    const contactos = document.getElementById('contactos').getElementsByTagName('tbody')[0];

    form.addEventListener('submit', function(event) {
      event.preventDefault();

      const id = document.getElementById('id').value;
      const nombre = document.getElementById('nombre').value;
      const apellido = document.getElementById('apellido').value;
      const genero = document.getElementById('genero').value;
      const email = document.getElementById('email').value;
      const telefono = document.getElementById('telefono').value;
      const fechaNacimiento = document.getElementById('fechaNacimiento').value;

      if (id) {
        // Lógica para actualizar el registro
      } else {
        // Lógica para insertar el registro

        // Crear una nueva fila en la tabla
        const newRow = contactos.insertRow(-1);
        newRow.innerHTML = `
          <td>${nombre}</td>
          <td>${apellido}</td>
          <td>${genero}</td>
          <td>${email}</td>
          <td>${telefono}</td>
          <td>${fechaNacimiento}</td>
          <td>
            <button onclick="editarContacto(this)">Editar</button>
            <button onclick="eliminarContacto(this)">Eliminar</button>
          </td>
        `;

        // Limpiar el formulario después de insertar
        limpiarFormulario();
      }
    });

    function editarContacto(btn) {
      // Lógica para cargar los datos del contacto en el formulario para editar
    }

    function eliminarContacto(btn) {
      // Lógica para eliminar el contacto de la tabla
      const row = btn.parentNode.parentNode;
      row.parentNode.removeChild(row);
    }

    function limpiarFormulario() {
      form.reset();
      document.getElementById('id').value = '';
    }
  </script>
</body>
</html>