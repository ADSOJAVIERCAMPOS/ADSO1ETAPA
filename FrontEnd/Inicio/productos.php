<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras JAVIER CAMPOS</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 12px auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 6px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #333;
        }

        .productos {
            display: inline-block;
            
            flex-wrap: none;
            gap: 10px;
        }

        .producto {
            text-align: center;
            border: 1px solid #ddd;
            padding: 8px;
            border-radius: 8px;
        }

        .producto img {
            max-width: 80%;
            height: auto;
            border-radius: 4px;
        }

        .precio {
            color: #e44d26;
            font-weight: bold;
        }

        .carrito {
            margin-top: 20px;
        }

        #lista-carrito {
            list-style: flex;
            padding: 0;
        }

        #lista-carrito li {
            border-bottom: 1px solid #ddd;
            padding: 5px;
        }

        #total {
            font-weight: bold;
            margin-top: 10px;
        }

        button {
            background-color: #2ce426;
            color: #fff;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>PRODUCTOS DE PAN DE DIOS</h1>
    
    <div class="productos">
        <div class="producto">
            <img src="https://img.freepik.com/foto-gratis/taza-leche-chocolate_144627-28631.jpg?size=626&ext=jpg&ga=GA1.1.1424923740.1703957851&semt=ais" >
            <p>Chocolate</p>
            <p class="precio">$3000</p>
            <button onclick="agregarProducto(3000)">Agregar al carrito</button>
        </div>
        
        <div class="producto">
            <img src="https://img.freepik.com/foto-gratis/donuts-deliciosos_144627-6267.jpg?size=626&ext=jpg&ga=GA1.1.1424923740.1703957851&semt=sph" >
            <p>Donut</p>
            <p class="precio">$2000</p>
            <button onclick="agregarProducto(2000)">Agregar al carrito</button>
        </div>

        <div class="producto">
            <img src="https://img.freepik.com/foto-gratis/pastel-carne-rustico-horneado-cebollas-saladas-generado-ia_188544-9582.jpg?size=626&ext=jpg&ga=GA1.1.1424923740.1703957851&semt=sph" >
            <p>Empanada</p>
            <p class="precio">$3000</p>
            <button onclick="agregarProducto(3000)">Agregar al carrito</button>
        </div>
        
        <div class="producto">
            <img src="https://img.freepik.com/foto-gratis/vista-superior-sopa-carne-patatas-dentro-color-azul-oscuro-cena-comida-vegetal-carne-escritorio_140725-30785.jpg?size=626&ext=jpg&ga=GA1.2.1424923740.1703957851&semt=ais" >
            <p>Caldo de Costilla</p>
            <p class="precio">$6000</p>
            <button onclick="agregarProducto(6000)">Agregar al carrito</button>
        </div>

        <div class="producto">
            <img src="https://img.freepik.com/foto-gratis/pasteles-queso-sabroso-sobre-tabla-madera_114579-88125.jpg?size=626&ext=jpg&ga=GA1.2.1424923740.1703957851&semt=ais" >
            <p>Pastel de Pollo</p>
            <p class="precio">$5000</p>
            <button onclick="agregarProducto(5000)">Agregar al carrito</button>
        </div>
        
        <div class="producto">
            <img src="https://img.freepik.com/foto-gratis/composicion-sabrosos-tamales-tradicionales_23-2149009562.jpg?size=626&ext=jpg&ga=GA1.1.1424923740.1703957851&semt=sph" >
            <p>Tamal</p>
            <p class="precio">$8000</p>
            <button onclick="agregarProducto(8000)">Agregar al carrito</button>
        </div>

        <div class="producto">
            <img src="https://img.freepik.com/foto-gratis/batido-leche-platano-fondo-madera_501050-979.jpg?size=626&ext=jpg&ga=GA1.2.1424923740.1703957851&semt=sph" >
            <p>Avena</p>
            <p class="precio">$4000</p>
            <button onclick="agregarProducto(4000)">Agregar al carrito</button>
        </div>
        
        <div class="producto">
            <img src="https://img.freepik.com/foto-gratis/surtido-vasos-batido-frutas-chocolate_23-2148707756.jpg?size=626&ext=jpg&ga=GA1.1.1424923740.1703957851&semt=ais" >
            <p>Jugo Natural</p>
            <p class="precio">$5000</p>
            <button onclick="agregarProducto(5000)">Agregar al carrito</button>
        </div>
        
        <!-- Agrega más productos según sea necesario -->
    </div>
    
    <div class="carrito">
        <h2>Carrito</h2>
        <ul id="lista-carrito">
            <!-- La lista de productos se mostrará aquí -->
        </ul>
        <p id="total">Total: $0.00</p>
        <button onclick="vaciarCarrito()">Vaciar Carrito</button>
    </div>
</div>

<script>
    let carrito = [];
    let total = 0;

    function agregarProducto(precio) {
        carrito.push(precio);
        actualizarCarrito();
    }

    function vaciarCarrito() {
        carrito = [];
        actualizarCarrito();
    }

    function actualizarCarrito() {
        const listaCarrito = document.getElementById("lista-carrito");
        const totalElement = document.getElementById("total");

        // Vaciar la lista de productos en el carrito
        listaCarrito.innerHTML = "";

        // Calcular el total
        total = carrito.reduce((acc, precio) => acc + precio, 0);

        // Actualizar la lista de productos en el carrito
        carrito.forEach((precio) => {
            const li = document.createElement("li");
            li.textContent = `$${precio.toFixed(2)}`;
            listaCarrito.appendChild(li);
        });

        // Mostrar el total
        totalElement.textContent = `Total: $${total.toFixed(2)}`;
    }
</script>
</body>
</html>