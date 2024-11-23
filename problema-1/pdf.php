<?php
include 'conexion.php';
require 'fpdf.php';

class PDF extends FPDF {
    // Encabezado
    function Header() {
        // Logo (opcional, si tienes un archivo de imagen, colócalo en tu proyecto y ajústalo aquí)
        // $this->Image('logo.png', 10, 6, 30);
        
        // Fuente
        $this->SetFont('Arial', 'B', 14);
        // Título
        $this->SetTextColor(33, 37, 41); // Gris oscuro
        $this->Cell(0, 10, 'Reporte de Compras', 0, 1, 'C');
        $this->Ln(10);
    }

    // Pie de página
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 10);
        $this->SetTextColor(128);
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo(), 0, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

// Cabecera de la tabla
$pdf->SetFillColor(52, 58, 64); // Gris oscuro
$pdf->SetTextColor(255); // Blanco
$pdf->Cell(30, 10, 'Nombre', 1, 0, 'C', true);
$pdf->Cell(20, 10, 'DNI', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Producto', 1, 0, 'C', true);
$pdf->Cell(30, 10, 'P. Unitario', 1, 0, 'C', true);
$pdf->Cell(20, 10, 'Cantidad', 1, 0, 'C', true);
$pdf->Cell(30, 10, 'P. Total', 1, 1, 'C', true);

// Datos de la tabla
$pdf->SetFont('Arial', '', 12);
$pdf->SetTextColor(0); // Negro

$sql = "SELECT * FROM compras";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $fill = false; // Alternar color de filas
    while ($row = $result->fetch_assoc()) {
        $pdf->SetFillColor(240, 240, 240); // Gris claro
        $pdf->Cell(30, 10, $row['nombre'], 1, 0, 'C', $fill);
        $pdf->Cell(20, 10, $row['dni'], 1, 0, 'C', $fill);
        $pdf->Cell(40, 10, $row['producto'], 1, 0, 'C', $fill);
        $pdf->Cell(30, 10, number_format($row['precio_unitario'], 2), 1, 0, 'C', $fill);
        $pdf->Cell(20, 10, $row['cantidad'], 1, 0, 'C', $fill);
        $pdf->Cell(30, 10, number_format($row['precio_total'], 2), 1, 1, 'C', $fill);
        $fill = !$fill; // Alternar
    }
} else {
    $pdf->Cell(0, 10, 'No hay registros.', 1, 1, 'C');
}

$conn->close();
$pdf->Output();
?>
