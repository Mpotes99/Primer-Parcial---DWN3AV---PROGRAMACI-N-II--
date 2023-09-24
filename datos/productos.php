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

    // Getters para acceder a los atributos privados
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
}

class CatalogoProductos
{
    private $productos = [];

    public function __construct($jsonPath)
    {
        $json = file_get_contents($jsonPath);
        $data = json_decode($json, true);

        if (is_array($data)) {
            foreach ($data as $item) {
                $producto = new Producto(
                    $item['id'],
                    $item['modelo'],
                    $item['color'],
                    $item['tipo'],
                    $item['capacidad'],
                    $item['imagen'],
                    $item['precio']
                );
                $this->productos[] = $producto;
            }
        }
    }

    public function getCatalogo()
    {
        return $this->productos;
    }
}
?>