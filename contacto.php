<?php 
include('db_config.php'); 
include('navbar.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO contactos (nombre, correo, asunto, mensaje) VALUES ('$nombre', '$correo', '$asunto', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSolutions - Contacto</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5" style="background-color: #50C878; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <h2 class="text-center text-primary mb-4" style="font-family: 'Arial', sans-serif; color: #1E90FF;">Contáctanos</h2>
    <form method="post" action="contacto.php" style="max-width: 600px; margin: auto;">
        <div class="form-group mb-3">
            <label for="nombre" class="form-label" style="color: #2F4F4F;">Nombre</label>
            <input type="text" class="form-control border border-primary" id="nombre" name="nombre" required style="background-color: #F0FFF0;">
        </div>
        <div class="form-group mb-3">
            <label for="correo" class="form-label" style="color: #2F4F4F;">Correo Electrónico</label>
            <input type="email" class="form-control border border-success" id="correo" name="correo" required style="background-color: #F0FFF0;">
        </div>
        <div class="form-group mb-3">
            <label for="asunto" class="form-label" style="color: #2F4F4F;">Asunto</label>
            <input type="text" class="form-control border border-warning" id="asunto" name="asunto" required style="background-color: #F0FFF0;">
        </div>
        <div class="form-group mb-4">
            <label for="mensaje" class="form-label" style="color: #2F4F4F;">Mensaje</label>
            <textarea class="form-control border border-danger" id="mensaje" name="mensaje" rows="5" required style="background-color: #F0FFF0;"></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg" style="border-radius: 50px; background-color: #1E90FF; border: none;">Enviar</button>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>

</html>
