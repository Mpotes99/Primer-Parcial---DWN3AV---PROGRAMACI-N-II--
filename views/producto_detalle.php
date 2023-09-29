<?php
// Verificar si se ha proporcionado un ID de producto válido en la URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $idProducto = $_GET['id'];

    // Aquí, debes realizar una consulta a tu base de datos o donde sea que almacenes la información detallada del producto.
    // Recupera la información del producto específico basado en el $idProducto.
    // Supongamos que tienes un objeto $productoDetalle que contiene los detalles del producto.

    // Verificar si se encontró el producto
    if ($productoDetalle) {
        $modelo = $productoDetalle->getModelo();
        $descripcion = $productoDetalle->getDescripcion();
        $comentarios = $productoDetalle->getComentarios(); // Supongamos que esto es una lista de comentarios.

        // A continuación, puedes mostrar la información detallada del producto.
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Detalles del Producto - <?= $modelo ?></title>
            <!-- Agrega tus estilos CSS aquí si es necesario -->
        </head>
        <body>
            <h1>Detalles del Producto - <?= $modelo ?></h1>
            <p>Descripción: <?= $descripcion ?></p>

            <!-- Muestra los comentarios de los usuarios si los tienes -->
            <h2>Comentarios de los Usuarios</h2>
            <ul>
                <?php foreach ($comentarios as $comentario) : ?>
                    <li><?= $comentario ?></li>
                <?php endforeach; ?>
            </ul>

            <!-- Agrega más contenido detallado aquí si es necesario -->

            <a href="termo.php">Volver a la lista de termos</a>

            <!-- Agrega tus scripts JavaScript aquí si es necesario -->
        </body>
        </html>
        <?php
    } else {
        // Manejar el caso en el que el producto no se encontró en la base de datos.
        echo "Producto no encontrado.";
    }
} else {
    // Manejar el caso en el que no se proporcionó un ID de producto válido en la URL.
    echo "ID de producto no válido.";
}
?>
