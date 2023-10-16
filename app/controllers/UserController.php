<?php
class UserController {
    private $userModel;

    public function __construct($userModel) {
        $this->userModel = $userModel;
    }

    public function createUser($name, $realName, $lastName, $email, $password, $DNI, $type, $postalCode, $phoneNumber, $gender) {
        $result = $this->userModel->createUser($name, $realName, $lastName, $email, $password, $DNI, $type, $postalCode, $phoneNumber, $gender);

        if ($result) {
            // Manejar el éxito (por ejemplo, redirigir a una página de inicio de sesión)
            header('Location: login.php');
        } else {
            // Manejar el error (por ejemplo, mostrar un mensaje de error)
            echo 'Error al registrar el usuario.';
        }
    }

    public function updateUser($id, $name, $realName, $lastName, $email, $password, $DNI, $type, $postalCode, $phoneNumber, $gender) {
        $result = $this->userModel->updateUser($id, $name, $realName, $lastName, $email, $password, $DNI, $type, $postalCode, $phoneNumber, $gender);

        if ($result) {
            // Manejar el éxito (por ejemplo, redirigir a una página de perfil actualizado)
            header('Location: profile.php');
        } else {
            // Manejar el error (por ejemplo, mostrar un mensaje de error)
            echo 'Error al actualizar el perfil del usuario.';
        }
    }

    public function deleteUser($id) {
        $result = $this->userModel->deleteUser($id);

        if ($result) {
            // Manejar el éxito (por ejemplo, redirigir a una página de inicio)
            header('Location: index.php');
        } else {
            // Manejar el error (por ejemplo, mostrar un mensaje de error)
            echo 'Error al eliminar el usuario.';
        }
    }

    public function getAllUsers() {
        return $this->userModel->getAllUsers();
    }

    public function getUserById($id) {
        return $this->userModel->getUserById($id);
    }
}
?>