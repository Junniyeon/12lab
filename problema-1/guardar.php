<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $producto = $_POST['producto'];
    $precio_unitario = $_POST['precio_unitario'];
    $cantidad = $_POST['cantidad'];
    $precio_total = $precio_unitario * $cantidad;

    $sql = "INSERT INTO compras (nombre, dni, producto, precio_unitario, cantidad, precio_total) 
            VALUES ('$nombre', '$dni', '$producto', '$precio_unitario', '$cantidad', '$precio_total')";

    if ($conn->query($sql) === TRUE) {
        echo "Compra registrada exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>