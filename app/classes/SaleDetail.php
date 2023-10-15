<?php

class SaleDetail {
    private $id;
    private $saleId;
    private $productId;
    private $quantity;
    private $unitPrice;
    private $purchaseDate;

    public function __construct($id, $saleId, $productId, $quantity, $unitPrice, $purchaseDate) {
        $this->id = $id;
        $this->saleId = $saleId;
        $this->productId = $productId;
        $this->quantity = $quantity;
        $this->unitPrice = $unitPrice;
        $this->purchaseDate = $purchaseDate;
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

    public function getPurchaseDate() {
        return $this->purchaseDate;
    }

    // Puedes agregar más métodos según tus necesidades.
}
?>