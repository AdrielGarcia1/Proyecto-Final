<?php
require_once('modelos/ModeloUsuario.php');

class UserController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function createUser($nombre, $nombre_real, $apellido, $correo, $contrasena, $DNI, $tipo, $codigo_postal, $numero_telefono, $genero) {
        // Hash de la contraseña
        $contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

        // Preparar la consulta SQL
        $sql = "INSERT INTO usuarios (nombre, nombre_real, apellido, correo, contrasena_hash, DNI, tipo, codigo_postal, numero_telefono, genero, estado)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 1)";

        // Ejecutar la consulta
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ssssssssss", $nombre, $nombre_real, $apellido, $correo, $contrasena_hash, $DNI, $tipo, $codigo_postal, $numero_telefono, $genero);

        if ($stmt->execute()) {
            return true; // El usuario se creó exitosamente
        } else {
            return false; // Error al crear el usuario
        }
    }

    public function updateUser($id, $nombre, $nombre_real, $apellido, $correo, $contrasena, $DNI, $tipo, $codigo_postal, $numero_telefono, $genero) {
        // Hash de la contraseña si se proporciona una nueva
        $contrasena_hash = '';
        if (!empty($contrasena)) {
            $contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);
        }

        // Preparar la consulta SQL
        $sql = "UPDATE usuarios
                SET nombre = ?, nombre_real = ?, apellido = ?, correo = ?, contrasena_hash = ?, DNI = ?, tipo = ?, codigo_postal = ?, numero_telefono = ?, genero = ?
                WHERE id = ?";

        // Ejecutar la consulta
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ssssssssssi", $nombre, $nombre_real, $apellido, $correo, $contrasena_hash, $DNI, $tipo, $codigo_postal, $numero_telefono, $genero, $id);

        if ($stmt->execute()) {
            return true; // El usuario se actualizó exitosamente
        } else {
            return false; // Error al actualizar el usuario
        }
    }

    public function deleteUser($id) {
        // Cambiar el estado del usuario a 0 (eliminado) o 2 (suspendido)
        $estado = 0; // Cambiar a 0 para eliminar o 2 para suspender

        // Preparar la consulta SQL
        $sql = "UPDATE usuarios
                SET estado = ?
                WHERE id = ?";

        // Ejecutar la consulta
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ii", $estado, $id);

        if ($stmt->execute()) {
            return true; // El usuario se eliminó o suspendió exitosamente
        } else {
            return false; // Error al eliminar o suspender el usuario
        }
    }

    public function getUserById($id) {
        // Preparar la consulta SQL
        $sql = "SELECT * FROM usuarios WHERE id = ?";

        // Ejecutar la consulta
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            return $result->fetch_assoc(); // Devolver los datos del usuario como un arreglo asociativo
        } else {
            return null; // Usuario no encontrado
        }
    }

    // Otros métodos relacionados con usuarios aquí
}
?>