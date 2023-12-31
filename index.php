<?PHP
require_once "classes/Conexion.php";
require_once "classes/Usuario.php";

$conexion = (new Conexion())->getConexion();

$query = "SELECT * FROM usuarios";

$PDOStatement = $conexion->prepare($query);
$PDOStatement->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
$PDOStatement->execute();

$usuarios = $PDOStatement->fetchAll();

session_start();

// Verificar si la variable de sesión del carrito no está definida y definirla
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}


// Detalles de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = ""; // Deja esto vacío si no hay contraseña
$dbname = "datos_stanley";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Cargar productos desde la base de datos
require_once "./datos/producto.php";
$productos = Producto::cargarProductosDesdeBD($conn);

// Cierra la conexión a la base de datos
$conn->close();

$secciones_validas = [
    "home" => [
        "titulo" => "Inicio"
    ],
    "vertodos" => [
        "titulo" => "Ver todos"
    ],
    "termo" => [
        "titulo" => "Termos"
    ],
    "mates" => [
        "titulo" => "Mates"
    ],
    "vasos" => [
        "titulo" => "Vasos"
    ],
    "mugs" => [
        "titulo" => "Mugs"
    ],
    "catalogo_completo" => [
        "titulo" => "Nuestro catalogo completo"
    ],
    "contacto" => [
        "titulo" => "Contacto"
    ],
    "infoenvios" => [
        "titulo" => "Info Envíos"
    ],
    "faqs" => [
        "titulo" => "Preguntas Frecuentes"
    ],
    "info" => [
        "titulo" => "Detalle de Producto"
    ],
    "alumnos" => [
        "titulo" => "Alumnos"
    ]
];

$seccion = isset($_GET['sec']) ? $_GET['sec'] : 'home';

if (!array_key_exists($seccion, $secciones_validas)) {
    $vista = "404";
    $titulo = "404: Página no encontrada";
} else {
    $vista = $seccion;
    $titulo = $secciones_validas[$seccion]['titulo'];
}

?>

/*
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stanley:
        <?= $titulo ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="carrito.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-3">
  <div class="container">
    <a class="navbar-brand" href="index.php?sec=home"><img src="./img/stanley-logo.png" alt="logo" class="logo"></a>
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
            <a class="dropdown-item" href="index.php?sec=termo">Termos</a>
            <a class="dropdown-item" href="index.php?sec=mates">Mates</a>
            <a class="dropdown-item" href="index.php?sec=vasos">Vasos</a>
            <a class="dropdown-item" href="index.php?sec=mugs">Mugs</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.php?sec=vertodos">Ver todos los productos</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?sec=faqs">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="index.php?sec=catalogo_completo">Catalogo Completo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?sec=infoenvios">Info Envíos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?sec=contacto">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?sec=alumnos">Alumnos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#carritoModal">
                <i class="fas fa-shopping-cart"></i> Carrito
            </a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<main class="mt-5 py-3">
    <?php
    if (file_exists("views/$vista.php")) {
        require_once "views/$vista.php";
    } else {
        echo "La vista solicitada no existe.";
    }
    ?>
</main>



<div class="modal fade" id="carritoModal" tabindex="-1" aria-labelledby="carritoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="carritoModalLabel">Carrito de Compras</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Realizar Pedido</button>
            </div>
        </div>
    </div>
</div>

<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/logofooter.svg" alt="Logo de Stanley" width="300">
            </div>
            <div class="col-md-6 mt-4">
                <h5>ACERCA DE STANLEY</h5>
                <ul class="list">
                    <li><a href="index.php?sec=quienes somos">¿Quiénes somos?</a></li>
                    <li><a href="index.php?sec=puntos">Puntos Oficiales</a></li>
                    <li><a href="index.php?sec=qa"">Preguntas frecuentes</a></li>
                    <li><a href="index.php?sec=terminos">Términos y condiciones</a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h5>INFORMACIÓN DE CONTACTO</h5>
                <address>
                    <p>Contacto: <a href="tel:5491139178980">5491139178980</a></p>
                </address>
            </div>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>*/
