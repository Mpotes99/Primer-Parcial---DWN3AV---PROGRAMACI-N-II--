<div class="container mt-5">
    <h1 class="text-center">Ponete en contacto</h1>
    <img src="img/banner3.webp" alt="banner contacto" class="img-fluid mt-3 mb-4">
    <form action="datos_post.php" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido:</label>
            <input type="text" class="form-control" name="apellido" id="apellido" required>
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Email:</label>
            <input type="email" class="form-control" name="correo" id="correo" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono:</label>
            <input type="tel" class="form-control" name="telefono" id="telefono" required>
        </div>
        <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje:</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="10" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
