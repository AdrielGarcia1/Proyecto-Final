<?php
class Address {
        private $db;

    public function __construct() {
        // Instancia la conexión a la base de datos en el constructor del controlador
        $this->db = new Database();
    }
    private $id;
    private $userId;
    private $provinceId;
    private $cityOrTown;
    private $postalCode;
    private $streetAddress;

    public function __construct($userId, $provinceId, $cityOrTown, $postalCode, $streetAddress) {
        $this->userId = $userId;
        $this->provinceId = $provinceId;
        $this->cityOrTown = $cityOrTown;
        $this->postalCode = $postalCode;
        $this->streetAddress = $streetAddress;
    }

    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getProvinceId() {
        return $this->provinceId;
    }

    public function getCityOrTown() {
        return $this->cityOrTown;
    }

    public function getPostalCode() {
        return $this->postalCode;
    }

    public function getStreetAddress() {
        return $this->streetAddress;
    }
}
?>
