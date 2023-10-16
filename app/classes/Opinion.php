<?php
class Opinion {
        private $db;

    public function __construct() {
        // Instancia la conexión a la base de datos en el constructor del controlador
        $this->db = new Database();
    }
    private $id;
    private $userId;
    private $productId;
    private $calificacion;
    private $comentario;
    private $fechaOpinion;

    public function __construct($userId, $productId, $calificacion, $comentario) {
        $this->userId = $userId;
        $this->productId = $productId;
        $this->calificacion = $calificacion;
        $this->comentario = $comentario;
        $this->fechaOpinion = new DateTime(); // Establecer la fecha actual
    }

    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getProductId() {
        return $this->productId;
    }

    public function getCalificacion() {
        return $this->calificacion;
    }

    public function getComentario() {
        return $this->comentario;
    }

    public function getFechaOpinion() {
        return $this->fechaOpinion;
    }

    // Puedes agregar otros métodos según las necesidades de tu aplicación.
}
?>