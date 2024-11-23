<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Compras</title>
    <!-- Vincular el archivo CSS -->
    <link rel="stylesheet" href="Estilacho.css">
    <!-- Agregar Font Awesome para los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <h1>Registrar Compras</h1>
    <form action="guardar.php" method="POST">
        <div class="input-container">
            <label for="nombre">Nombre:</label>
            <i class="fas fa-user"></i> <!-- Icono de usuario -->
            <input type="text" name="nombre" id="nombre" required placeholder="Escribe tu nombre">
        </div>
        
        <div class="input-container">
            <label for="dni">DNI:</label>
            <i class="fas fa-id-card"></i> <!-- Icono de tarjeta de identificación -->
            <input type="text" name="dni" id="dni" maxlength="8" required placeholder="Escribe tu DNI">
        </div>
        
        <div class="input-container">
            <label for="producto">Producto:</label>
            <i class="fas fa-cogs"></i> <!-- Icono de producto -->
            <input type="text" name="producto" id="producto" required placeholder="Escribe el producto">
        </div>
        
        <div class="input-container">
            <label for="precio_unitario">Precio Unitario:</label>
            <i class="fas fa-tag"></i> <!-- Icono de etiqueta de precio -->
            <input type="number" name="precio_unitario" id="precio_unitario" step="0.01" required placeholder="Precio unitario">
        </div>
        
        <div class="input-container">
            <label for="cantidad">Cantidad:</label>
            <i class="fas fa-sort-numeric-up"></i> <!-- Icono de cantidad -->
            <input type="number" name="cantidad" id="cantidad" required placeholder="Cantidad de productos">
        </div>
        
        <button type="submit">Guardar Compra</button>
    </form>

    <form action="pdf.php" method="POST">
        <button type="submit">Generar PDF</button>
    </form>
</body>
</html>
