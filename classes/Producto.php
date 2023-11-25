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


    // Cargar productos desde la base de datos
    public function catalogo_completo(): array
    {
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM producto";
        
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute();

        $producto = $PDOStatement->fetchAll();

        echo "<pre>";
        print_r($producto);
        echo "</pre>";

        return[];
    }
}

    /**
     * Devuelve los datos de un producto en particular
     * @param int $idProducto El ID Ãºnico del producto a mostrar 
     */
    public function productos(int $idProductos): ?Producto
    {
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM productos WHERE id = ?";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute([$idProducto]);

        $result = $PDOStatement->fetch();

        return $result ?? null;
    }

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

    ?>