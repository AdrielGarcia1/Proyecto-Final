<?php

class SoldProduct {
    private $id;
    private $productId;
    private $userId;
    private $quantity;
    private $saleDate;

    public function __construct($id, $productId, $userId, $quantity, $saleDate) {
        $this->id = $id;
        $this->productId = $productId;
        $this->userId = $userId;
        $this->quantity = $quantity;
        $this->saleDate = $saleDate;
    }

    public function getId() {
        return $this->id;
    }

    public function getProductId() {
        return $this->productId;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getSaleDate() {
        return $this->saleDate;
    }

    // Puedes agregar más métodos según tus necesidades.
}
?>