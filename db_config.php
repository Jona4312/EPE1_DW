<?php
// db_config.php
$servername = "localhost";
$username = "root"; // Usuario de MySQL
$password = ""; // Contraseña de MySQL (por defecto suele estar vacía)
$dbname = "techsolutions"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
