<?PHP

echo "<h1>Datos via Post<h1>";

$datos = $_POST;

echo "<pre>";
print_r($datos);
echo "</pre>";

$nombre = $datos['nombre'];
$apellido = $datos['apellido'];
$email = $datos['correo'];
$telefono = $datos['telefono'];
$mensaje = $datos['mensaje'];


echo "<p>El dato del campo nombre es: $nombre </p>";
echo "<p>El dato del campo apellido es: $apellido </p>";
echo "<p>El dato del campo email es: $correo </p>";
echo "<p>El dato del campo telefono es: $telefono </p>";
echo "<p>El dato del campo mensaje es: $mensaje </p>";

?>