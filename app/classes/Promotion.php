<?php

class Promotion {
    private $id;
    private $name;
    private $description;
    private $type;
    private $value;
    private $startDate;
    private $endDate;

    public function __construct($id, $name, $description, $type, $value, $startDate, $endDate) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->type = $type;
        $this->value = $value;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getType() {
        return $this->type;
    }

    public function getValue() {
        return $this->value;
    }

    public function getStartDate() {
        return $this->startDate;
    }

    public function getEndDate() {
        return $this->endDate;
    }

    // Puedes agregar más métodos según tus necesidades, como validar si la promoción está activa en un momento dado, por ejemplo.
}
?>