<?php
class OrderHistory {
        private $db;

    public function __construct() {
        // Instancia la conexión a la base de datos en el constructor del controlador
        $this->db = new Database();
    }
    private $id;
    private $userId;
    private $fechaPedido;
    private $estadoPedido;

    public function __construct($userId, $estadoPedido) {
        $this->userId = $userId;
        $this->estadoPedido = $estadoPedido;
        $this->fechaPedido = new DateTime(); // Establecer la fecha actual
    }

    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getFechaPedido() {
        return $this->fechaPedido;
    }

    public function getEstadoPedido() {
        return $this->estadoPedido;
    }

    // Puedes agregar otros métodos según las necesidades de tu aplicación.
}
?>