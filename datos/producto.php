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
    private $descripcion;
    private $comentarios;

    public function __construct($id, $modelo, $color, $tipo, $capacidad, $imagen, $precio, $descripcion, $comentarios)
    {
        $this->id = $id;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->tipo = $tipo;
        $this->capacidad = $capacidad;
        $this->imagen = $imagen;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->comentarios = $comentarios;
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
    
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getComentarios()
    {
        return $this->comentarios;
    }


    //  cargar productos desde un archivo JSON
    public static function cargarProductosDesdeJSON($rutaArchivo)
    {
        $productos = [];
        $json = file_get_contents($rutaArchivo);
        $data = json_decode($json, true);

        if ($data) {
            foreach ($data as $item) {
                $producto = new Producto(
                    $item['id'],
                    $item['modelo'],
                    $item['color'],
                    $item['tipo'],
                    $item['capacidad'],
                    $item['imagen'],
                    $item['precio'],
                    $item['descripcion'],
                    $item['comentarios']
                );
                $productos[] = $producto;
            }
        }

        return $productos;
    }
}

?>