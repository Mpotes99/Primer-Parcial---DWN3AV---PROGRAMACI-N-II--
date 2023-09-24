<h1>Ponete en contacto</h1>
    <img src="img/banner3.webp" alt="banner contacto">
    <form action="datos_post.php" method="POST">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="correo" id="correo" required>
        </div>
        <div>
            <label for="telefono">Telefono:</label>
            <input type="tel" name="telefono" id="telefono" required>
        </div>
        <div>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="10" required style="resize: none;"></textarea>
        </div>
        <button type="submit">Enviar</button>
    </form>
</html>

