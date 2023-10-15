<?php
class Address {
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
