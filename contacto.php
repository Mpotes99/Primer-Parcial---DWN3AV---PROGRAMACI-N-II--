<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="style.css">
    <script src="/script.js"></script>
</head>

<div class="alert alert-dark custom-alert" role="alert">
    ENVÍO GRATIS desde $25.000. LLEGA HOY 🚚 [CABA/GBA] comprando hasta las 12PM
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="./img/stanley-logo.png" alt="logo" class="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Productos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Termos</a>
                <a class="dropdown-item" href="#">Mates</a>
                <a class="dropdown-item" href="#">Vasos</a>
                <a class="dropdown-item" href="#">Mugs</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Ver todos los productos</a>
            </div>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">FAQ</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Info Envíos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="contacto.php">Contacto</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
<body>
    <h1>Ponete en contacto</h1>

    <form action="#" method="POST">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        <div>
            <label for="nombre">Apellido:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        <div>
            <label for="nombre">Email:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        <div>
            <label for="nombre">Telefono:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        <div>
            <label for="pass">Mensaje:</label>
            <input type="password" name="pass" id="pass" required>
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

