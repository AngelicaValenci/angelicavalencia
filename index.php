<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Producto</title>
</head>
<body>
    <h1>Formulario de Producto</h1>
    <form action="procesar_producto.php" method="post">
        <label for="nombre">Nombre del Producto:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="precio">Precio por Unidad:</label>
        <input type="number" id="precio" name="precio" step="0.01" required><br><br>

        <label for="cantidad">Cantidad en Inventario:</label>
        <input type="number" id="cantidad" name="cantidad" min="0" required><br><br>

        <input type="submit" value="Guardar Producto">
    </form>
</body>
</html>

<?php
// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

// Aquí puedes agregar la lógica para guardar el producto en una base de datos o en algún otro sistema de almacenamiento

echo "Producto guardado exitosamente:<br>";
echo "Nombre: " . $nombre . "<br>";
echo "Precio: $" . $precio . "<br>";
echo "Cantidad en Inventario: " . $cantidad . "<br>";
?>