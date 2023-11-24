<?php
class Producto
{
    private $id;
    private $modelo;
    private $color;
    private $tipo;
    private $capacidad;
    private $imagen;
    private $precio;

    public function __construct($id, $modelo, $color, $tipo, $capacidad, $imagen, $precio)
    {
        $this->id = $id;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->tipo = $tipo;
        $this->capacidad = $capacidad;
        $this->imagen = $imagen;
        $this->precio = $precio;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getCapacidad()
    {
        return $this->capacidad;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    // Cargar productos desde la base de datos
    public static function cargarProductosDesdeBD($conn)
    {
        $productos = [];

        $sql = "SELECT * FROM productos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $producto = new Producto(
                    $row['id'],
                    $row['modelo'],
                    $row['color'],
                    $row['tipo'],
                    $row['capacidad'],
                    $row['imagen'],
                    $row['precio']
                );
                $productos[] = $producto;
            }
        }

        return $productos;
    }
}
?>
