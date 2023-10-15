<?php
class Color {
    private $id;
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    // Puedes agregar otros métodos según las necesidades de tu aplicación, como obtener todos los productos con este color, etc.
}
?>