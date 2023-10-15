<?php

class Sale {
    private $id;
    private $userId;
    private $saleDate;

    public function __construct($id, $userId, $saleDate) {
        $this->id = $id;
        $this->userId = $userId;
        $this->saleDate = $saleDate;
    }

    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getSaleDate() {
        return $this->saleDate;
    }

    // Puedes agregar más métodos según tus necesidades.
}
?>