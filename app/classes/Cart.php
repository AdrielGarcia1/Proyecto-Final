<?php
class Cart {
    private $id;
    private $userId;
    private $creationDate;

    public function __construct($userId, $creationDate) {
        $this->userId = $userId;
        $this->creationDate = $creationDate;
    }

    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getCreationDate() {
        return $this->creationDate;
    }
}
?>