<?php
if (isset($_GET['id'])) {
    $producto_id = $_GET['id'];

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

    $sql = "SELECT * FROM productos WHERE id = $producto_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $modelo = $row['modelo'];
        $tipo = $row['tipo'];
        $capacidad = $row['capacidad'];
        $precio = $row['precio'];
        $imagen = $row['imagen'];

        ?>

        <div class="container">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?= $imagen ?>" class="card-img-top img-fluid" alt="<?= $modelo ?>">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title display-4"><?= $modelo ?></h5>
                            <p class="card-text h3">Tipo: <?= $tipo ?></p>
                            <p class="card-text h3">Capacidad: <?= $capacidad ?></p>
                            <p class="card-text" text-success h3>Precio: $<?= number_format($precio, 2) ?></p>
                            <p class="card-text">Descripción:<?= $capacidad ?> </p>
                            <a href="#" class="btn btn-success btn-lg">Comprar</a>
                        </div>    
                    </div>    
                </div>
            </div>
        </div>

        <?php
    } else {
        echo "Producto no encontrado.";
    }

    // Cierra la conexión a la base de datos
    $conn->close();
} else {
    echo "ID de producto no especificado.";
}
?>