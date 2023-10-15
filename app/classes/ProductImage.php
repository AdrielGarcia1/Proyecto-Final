<?php

class ProductImage {
    private $id;
    private $productId;
    private $imageUrl;

    public function __construct($id, $productId, $imageUrl) {
        $this->id = $id;
        $this->productId = $productId;
        $this->imageUrl = $imageUrl;
    }

    public function getId() {
        return $this->id;
    }

    public function getProductId() {
        return $this->productId;
    }

    public function getImageUrl() {
        return $this->imageUrl;
    }

    public function setImageUrl($imageUrl) {
        $this->imageUrl = $imageUrl;
    }

    // Puedes agregar más métodos según tus necesidades, como guardar, actualizar o eliminar imágenes de productos en la base de datos.
}
?>
