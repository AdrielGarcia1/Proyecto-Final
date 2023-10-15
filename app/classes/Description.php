<?php
class Description {
    private $id;
    private $productId;
    private $type;
    private $text;

    public function __construct($productId, $type, $text) {
        $this->productId = $productId;
        $this->type = $type;
        $this->text = $text;
    }

    public function getId() {
        return $this->id;
    }

    public function getProductId() {
        return $this->productId;
    }

    public function getType() {
        return $this->type;
    }

    public function setText($text) {
        $this->text = $text;
    }

    public function getText() {
        return $this->text;
    }

    // Puedes agregar otros métodos según las necesidades de tu aplicación.
}
?>