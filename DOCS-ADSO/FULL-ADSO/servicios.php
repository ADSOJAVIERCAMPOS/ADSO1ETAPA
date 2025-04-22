<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PEDIDOS PAN DE DIOS</title>
  <style>
    /* Estilos CSS */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .form-container {
      width: 80%;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    /* Estilos para la tabla */
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #086d1d;
      color: #fff;
    }

    tr:hover {
      background-color: #f5f5f5;
    }

    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 6px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    button {
      padding: 10px 20px;
      margin-top: 10px;
      border: none;
      border-radius: 4px;
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
    }

    button:hover {
      background-color: #07ce53;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>PEDIDOS PAN DE DIOS</h1>
    <form id="pedido-form">
      <div class="form-group">
        <label for="nombre">Nombre de Contacto:</label>
        <input type="text" id="nombre" name="nombre">
      </div>
      <div class="form-group">
        <label for="direccion">Dirección de Entrega:</label>
        <input type="text" id="direccion" name="direccion">
      </div>
      <div class="form-group">
        <label for="telefono">Teléfono de Contacto:</label>
        <input type="text" id="telefono" name="telefono">
      </div>
      <div class="form-group">
        <label for="fecha">Fecha y Hora:</label>
        <input type="datetime-local" id="fecha" name="fecha">
      </div>

      <h2>Detalles del Pedido</h2>
      <table id="pedido-table">
        <thead>
          <tr>
            <th>Producto</th>
            <th>Descripción del Producto</th>
            <th>Cantidad</th>
            <th>Precio por Unidad</th>
            <th>Precio Total</th>
          </tr>
        </thead>
        <tbody>
          <!-- Filas de la tabla se agregan dinámicamente -->
        </tbody>
      </table>

      <div class="form-group">
        <label for="total-pedido">Total del Pedido:</label>
        <input type="text" id="total-pedido" name="total-pedido" readonly>
      </div>
      <div class="form-group">
        <label for="observaciones">Observaciones:</label>
        <textarea id="observaciones" name="observaciones"></textarea>
      </div>

      <button type="button" onclick="agregarProducto()">Agregar Producto</button>
      <button type="button" onclick="guardarPedido()">Guardar Pedido</button>
      <button type="button" onclick="consultarPedidos()">Consultar Pedidos</button>
      <button type="button" onclick="actualizarPedido()">Actualizar Pedido</button>
      <button type="button" onclick="eliminarPedido()">Eliminar Pedido</button>
    </form>
  </div>

  <script>
    // Funciones JavaScript para las operaciones CRUD
    function agregarProducto() {
      // Agregar fila a la tabla de pedidos dinámicamente
      const table = document.getElementById('pedido-table').getElementsByTagName('tbody')[0];
      const newRow = table.insertRow(table.rows.length);
      const cellProduct = newRow.insertCell(0);
      const cellDescription = newRow.insertCell(1);
      const cellQuantity = newRow.insertCell(2);
      const cellPriceUnit = newRow.insertCell(3);
      const cellPriceTotal = newRow.insertCell(4);

      // Inputs para cada celda
      cellProduct.innerHTML = '<input type="text">';
      cellDescription.innerHTML = '<input type="text">';
      cellQuantity.innerHTML = '<input type="number" min="1">';
      cellPriceUnit.innerHTML = '<input type="number" min="0.01" step="0.01">';
      cellPriceTotal.innerHTML = '<input type="text" readonly>';
    }

    function calcularTotalPedido() {
      // Calcular el total del pedido sumando los precios totales de los productos
      const table = document.getElementById('pedido-table').getElementsByTagName('tbody')[0];
      const rows = table.getElementsByTagName('tr');
      let total = 0;

      for (let i = 0; i < rows.length; i++) {
        const priceTotalInput = rows[i].getElementsByTagName('input')[4];
        if (priceTotalInput) {
          total += parseFloat(priceTotalInput.value) || 0;
        }
      }

      document.getElementById('total-pedido').value = total.toFixed(2);
    }

    function guardarPedido() {
      // Guardar el pedido (operación de inserción)
      console.log('Pedido guardado');
      // Aquí podrías enviar los datos al backend para guardarlos en una base de datos, por ejemplo.
    }

    function consultarPedidos() {
      // Consultar pedidos (operación de lectura)
      console.log('Pedidos consultados');
      // Aquí podrías realizar una solicitud al backend para obtener los datos almacenados.
    }

    function actualizarPedido() {
      // Actualizar pedido (operación de actualización)
      console.log('Pedido actualizado');
      // Podrías enviar los datos actualizados al backend para actualizar el pedido en la base de datos.
    }

    function eliminarPedido() {
      // Eliminar pedido (operación de eliminación)
      console.log('Pedido eliminado');
      // Podrías enviar una solicitud al backend para eliminar el pedido de la base de datos.
    }
  </script>
</body>
</html>