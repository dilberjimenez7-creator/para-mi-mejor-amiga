<?php
include "conexion.php";

if (!empty($_POST['contenido'])) {
    $contenido = htmlspecialchars($_POST['contenido']);
    $sql = "INSERT INTO entradas (contenido) VALUES ('$contenido')";
    $conn->query($sql);
}

header("Location: index.php");
