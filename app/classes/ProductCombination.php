<?php
class ProductCombination {
    private $id;
    private $productId;
    private $sizeId;
    private $colorId;
    private $stock;

    public function __construct($productId, $sizeId, $colorId, $stock) {
        $this->productId = $productId;
        $this->sizeId = $sizeId;
        $this->colorId = $colorId;
        $this->stock = $stock;
    }

    public function getId() {
        return $this->id;
    }

    public function getProductId() {
        return $this->productId;
    }

    public function getSizeId() {
        return $this->sizeId;
    }

    public function getColorId() {
        return $this->colorId;
    }

    public function getStock() {
        return $this->stock;
    }

    // Puedes agregar otros métodos según las necesidades de tu aplicación.
}
?>