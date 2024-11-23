<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Compras</title>
    <!-- Vincular el archivo CSS -->
    <link rel="stylesheet" href="Estilacho.css">
</head>
<body>
    <h1>Registrar Compras</h1>
    <form action="guardar.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        
        <label>DNI:</label>
        <input type="text" name="dni" maxlength="8" required>
        
        <label>Producto:</label>
        <input type="text" name="producto" required>
        
        <label>Precio Unitario:</label>
        <input type="number" name="precio_unitario" step="0.01" required>
        
        <label>Cantidad:</label>
        <input type="number" name="cantidad" required>
        
        <button type="submit">Guardar Compra</button>
    </form>
    <form action="pdf.php" method="POST">
        <button type="submit">Generar PDF</button>
    </form>
</body>
</html>