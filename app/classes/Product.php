<?php
class Product {
        private $db;

    public function __construct() {
        // Instancia la conexión a la base de datos en el constructor del controlador
        $this->db = new Database();
    }
    private $id;
    private $name;
    private $price;
    private $creationDate;
    private $categoryId;
    private $totalStock;
    private $brandId;

    public function __construct($name, $price, $categoryId, $totalStock, $brandId) {
        $this->name = $name;
        $this->price = $price;
        $this->categoryId = $categoryId;
        $this->totalStock = $totalStock;
        $this->brandId = $brandId;
        $this->creationDate = new DateTime(); // Establecer la fecha actual
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getCreationDate() {
        return $this->creationDate;
    }

    public function getCategoryId() {
        return $this->categoryId;
    }

    public function getTotalStock() {
        return $this->totalStock;
    }

    public function getBrandId() {
        return $this->brandId;
    }

    // Puedes agregar otros métodos según las necesidades de tu aplicación.
}
?>