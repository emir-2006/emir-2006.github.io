// Declaración de una variable global que almacena los productos en el carrito
let productosEnCarrito = [];

// Función para agregar un producto al carrito
function agregarProducto(nombre, precio) {
    // Agregar un objeto con el nombre y el precio del producto al arreglo productosEnCarrito
    productosEnCarrito.push({ nombre, precio });
    // Llamar a la función actualizarCarrito para refrescar la visualización del carrito
    actualizarCarrito();
}

// Función para quitar un producto del carrito
function quitarProducto(index) {
    // Eliminar el producto en el índice especificado del arreglo productosEnCarrito
    productosEnCarrito.splice(index, 1);
    // Llamar a la función actualizarCarrito para refrescar la visualización del carrito
    actualizarCarrito();
}

// Función para actualizar la visualización del carrito
function actualizarCarrito() {
    // Obtener referencias a los elementos del DOM
    const carritoTable = document.getElementById('carrito');
    const totalSpan = document.getElementById('total');
    const productosInput = document.getElementById('productos');
    const precioTotalInput = document.getElementById('precio_total');
  
    // Limpiar el contenido actual de la tabla del carrito
    carritoTable.innerHTML = `
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    `;
  
    // Variable para almacenar el total de precios de los productos en el carrito
    let total = 0;

    // Recorrer cada producto en el carrito y agregarlo a la tabla del carrito
    productosEnCarrito.forEach((producto, index) => {
        carritoTable.innerHTML += `
            <tr>
                <td>${producto.nombre}</td>
                <td>${producto.precio}</td>
                <td><button onclick="quitarProducto(${index})">Quitar</button></td>
            </tr>
        `;
        // Agregar el precio del producto actual al total
        total += producto.precio;
    });
  
    // Mostrar el total en el elemento <span> correspondiente
    totalSpan.textContent = total.toFixed(2);
  
    // Actualizar el valor de los elementos de input ocultos con la información del carrito
    productosInput.value = JSON.stringify(productosEnCarrito);
    precioTotalInput.value = total.toFixed(2);
}