<?php

class SoldProductDetail {
        private $db;

    public function __construct() {
        // Instancia la conexión a la base de datos en el constructor del controlador
        $this->db = new Database();
    }
    private $id;
    private $saleId;
    private $productId;
    private $quantity;
    private $unitPrice;

    public function __construct($id, $saleId, $productId, $quantity, $unitPrice) {
        $this->id = $id;
        $this->saleId = $saleId;
        $this->productId = $productId;
        $this->quantity = $quantity;
        $this->unitPrice = $unitPrice;
    }

    public function getId() {
        return $this->id;
    }

    public function getSaleId() {
        return $this->saleId;
    }

    public function getProductId() {
        return $this->productId;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getUnitPrice() {
        return $this->unitPrice;
    }

}
?>