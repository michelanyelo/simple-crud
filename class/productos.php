<?php
/* @autor Miguel Ángel Monzón Martínez */
class Producto
{
    private $id;
    private $nombre;
    private $precio;
    private $descripcion;
    private $id_categoria;
    private $imagen;
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function getIdCategoria()
    {
        return $this->id_categoria;
    }

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    public function setIdCategoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;
    }

    // insertar
    public function insert()
    {
        $sql = "INSERT INTO productos (nombre, precio, descripcion, imagen, id_categoria) VALUES (:nombre, :precio, :descripcion, :imagen, :id_categoria)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':precio', $this->precio);
        $stmt->bindParam(':descripcion', $this->descripcion);
        $stmt->bindParam(':imagen', $this->imagen);
        $stmt->bindParam(':id_categoria', $this->id_categoria);
        $stmt->execute();
    }

    // seleccionar
    public function select($id)
    {
        $sql = "SELECT * FROM productos WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // actualizar
    public function update($id)
    {
        $sql = "UPDATE productos SET nombre = :nombre, precio = :precio, descripcion = :descripcion, imagen = :imagen, id_categoria = :id_categoria WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':precio', $this->precio);
        $stmt->bindParam(':descripcion', $this->descripcion);
        $stmt->bindParam(':imagen', $this->imagen);
        $stmt->bindParam(':id_categoria', $this->id_categoria);
        $stmt->execute();
    }

    // eliminar
    public function delete($id)
    {
        $sql = "DELETE FROM productos WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    // listar
    public function getAll()
    {
        $sql = "SELECT * FROM productos ORDER BY id ASC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllCat()
    {
        $sql = "SELECT p.*, c.nombre AS categoria_nombre 
                FROM productos p
                INNER JOIN categorias c 
                ON p.id_categoria = c.id
                ORDER BY p.id ASC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
