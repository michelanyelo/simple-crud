<?php
/* @autor Miguel Ángel Monzón Martínez */
class Categoria
{
    private $id;
    private $codigo;
    private $nombre;
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // set get ID

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    // set get CODIGO

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    // set get NOMBRE

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    // insertar
    public function insert()
    {
        $sql = "INSERT INTO categorias (nombre, codigo) VALUES (:nombre, :codigo)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':codigo', $this->codigo);
        $stmt->execute();
    }

    // seleccionar
    public function select($id)
    {
        $sql = "SELECT * FROM categorias WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // actualizar
    public function update($id)
    {
        $sql = "UPDATE categorias SET nombre = :nombre, codigo = :codigo WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':codigo', $this->codigo);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
    }

    // eliminar
    public function delete($id)
    {
        $sql = "DELETE FROM categorias WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    // listar
    public function getAll()
    {
        $sql = "SELECT * FROM categorias ORDER BY id ASC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
