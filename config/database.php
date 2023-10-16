<?php
class Database {
    private $host = 'localhost'; // Cambia esto al nombre de tu servidor de base de datos
    private $db_name = 'nombre_base_de_datos'; // Cambia esto al nombre de tu base de datos
    private $username = 'usuario_db'; // Cambia esto a tu nombre de usuario de base de datos
    private $password = 'contrasena_db'; // Cambia esto a tu contraseña de base de datos
    private $conn;

    public function connect() {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                'mysql:host=' . $this->host . ';dbname=' . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
        }

        return $this->conn;
    }
}
?>