<?php
class Cart {
        private $db;

    public function __construct() {
        // Instancia la conexión a la base de datos en el constructor del controlador
        $this->db = new Database();
    }
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