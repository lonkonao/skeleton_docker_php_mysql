<?php
$conn = mysqli_connect("mysql", "username", "password", "database", "3306");

echo "<h1>Estado Conexión</h1>";
echo "<br>";


if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
echo "Conexión exitosa";
mysqli_close($conn);
?>