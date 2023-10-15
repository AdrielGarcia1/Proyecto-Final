<?php
class UserModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function createUser($name, $realName, $lastName, $email, $password, $DNI, $type, $postalCode, $phoneNumber, $gender) {
        $query = "INSERT INTO users (nombre, nombre_real, apellido, correo, contrasena_hash, DNI, tipo, codigo_postal, numero_telefono, genero) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ssssssssss", $name, $realName, $lastName, $email, $password, $DNI, $type, $postalCode, $phoneNumber, $gender);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateUser($id, $name, $realName, $lastName, $email, $password, $DNI, $type, $postalCode, $phoneNumber, $gender) {
        $query = "UPDATE users SET nombre = ?, nombre_real = ?, apellido = ?, correo = ?, contrasena_hash = ?, 
                  DNI = ?, tipo = ?, codigo_postal = ?, numero_telefono = ?, genero = ? WHERE id = ?";
        
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ssssssssssi", $name, $realName, $lastName, $email, $password, $DNI, $type, $postalCode, $phoneNumber, $gender, $id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteUser($id) {
        $query = "UPDATE users SET estado = 0 WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllUsers() {
        $query = "SELECT * FROM users";
        $result = $this->db->query($query);
        $users = array();

        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }

        return $users;
    }

    public function getUserById($id) {
        $query = "SELECT * FROM users WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        return $user;
    }
}
?>