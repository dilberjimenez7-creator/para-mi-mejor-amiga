<?php include "conexion.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Diario Personal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="diario">
<h1>Mi Diario Personal</h1>
<p>Escribe lo que piensas hoy…</p>

<form action="guardar.php" method="POST">
<textarea name="contenido" required></textarea>
<button type="submit">Guardar Entrada</button>
</form>

<h2>Entradas guardadas</h2>

<div class="entradas">
<?php
$sql = "SELECT * FROM entradas ORDER BY fecha DESC";
$resultado = $conn->query($sql);

while ($fila = $resultado->fetch_assoc()) {
    echo "<div class='entrada'>";
    echo "<strong>" . $fila['fecha'] . "</strong><br>";
    echo nl2br($fila['contenido']);
    echo "</div>";
        }
        ?>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>
