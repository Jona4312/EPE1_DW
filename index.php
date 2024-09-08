<?php include('navbar.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSolutions - Inicio</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<body style="background-color: #f0f8ff;">
    <div class="container mt-5">
        <h1 class="text-center text-primary">Bienvenidos a TechSolutions</h1>
        <p class="lead text-center">Somos una empresa de asesoría tecnológica especializada en brindar soluciones innovadoras a nuestros clientes.</p>

        <!-- Testimonios con carrusel -->
        <div id="carouselTestimonials" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <blockquote class="blockquote text-center">
                            <p class="mb-0">"Excelente servicio y atención personalizada."</p>
                            <footer class="blockquote-footer">Cliente 1</footer>
                        </blockquote>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <blockquote class="blockquote text-center">
                            <p class="mb-0">"Nos ayudaron a mejorar nuestros procesos internos."</p>
                            <footer class="blockquote-footer">Cliente 2</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselTestimonials" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselTestimonials" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
</body>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
