<?php
class User {
        private $db;

    public function __construct() {
        // Instanciar una conexión a la base de datos
        $this->db = new Database();
    }
    private $id;
    private $nombre;
    private $nombre_real;
    private $apellido;
    private $correo;
    private $contrasena_hash;
    private $DNI;
    private $tipo;
    private $fecha_registro;
    private $codigo_postal;
    private $numero_telefono;
    private $estado;
    private $genero;

    public function __construct($id, $nombre, $nombre_real, $apellido, $correo, $contrasena_hash, $DNI, $tipo, $fecha_registro, $codigo_postal, $numero_telefono, $estado, $genero) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->nombre_real = $nombre_real;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->contrasena_hash = $contrasena_hash;
        $this->DNI = $DNI;
        $this->tipo = $tipo;
        $this->fecha_registro = $fecha_registro;
        $this->codigo_postal = $codigo_postal;
        $this->numero_telefono = $numero_telefono;
        $this->estado = $estado;
        $this->genero = $genero;
    }

    // Método para verificar las credenciales del usuario
public function verifyCredentials($correoOUsuario, $contrasena) {
    // Conexión a la base de datos
    $db = new Database();

    // Consulta preparada para obtener las credenciales del usuario por correo o nombre de usuario
    $consulta = "SELECT id, correo, contrasena_hash, estado FROM usuarios WHERE correo = :correo OR nombre = :nombre";
    $parametros = [':correo' => $correoOUsuario, ':nombre' => $correoOUsuario];
    
    $resultado = $db->query($consulta, $parametros);

    if ($resultado && password_verify($contrasena, $resultado[0]['contrasena_hash'])) {
        // Verifica el estado del usuario
        $estado = $resultado[0]['estado'];
        
        if ($estado == 1) {
            // El usuario está activo y puede iniciar sesión
            return $resultado[0]['id'];
        } elseif ($estado == 0) {
            // La cuenta del usuario está dada de baja
            return 'La cuenta ha sido dada de baja';
        } elseif ($estado == 2) {
            // La cuenta del usuario está suspendida
            return 'La cuenta está suspendida';
        }
    }
    // Las credenciales son incorrectas o el usuario no existe
    return false;
}

    // Método para registrar un nuevo usuario
    public static function registerUser($nombre, $nombre_real, $apellido, $correo, $contrasena, $DNI, $codigo_postal, $numero_telefono, $genero) {
    // Genera un hash seguro de la contraseña.
    $contrasena_hash = password_hash($contrasena, PASSWORD_BCRYPT);

    // Conexión a la base de datos
    $db = new Database();

    // Consulta preparada para insertar un nuevo usuario en la base de datos
    $consulta = "INSERT INTO usuarios (nombre, nombre_real, apellido, correo, contrasena_hash, DNI, codigo_postal, numero_telefono, genero) VALUES (:nombre, :nombre_real, :apellido, :correo, :contrasena, :DNI, :codigo_postal, :numero_telefono, :genero)";
    $parametros = [
        ':nombre' => $nombre,
        ':nombre_real' => $nombre_real,
        ':apellido' => $apellido,
        ':correo' => $correo,
        ':contrasena' => $contrasena_hash,
        ':DNI' => $DNI,
        ':codigo_postal' => $codigo_postal,
        ':numero_telefono' => $numero_telefono,
        ':genero' => $genero
    ];

    // Ejecuta la inserción en la base de datos y verifica si se registró con éxito.
    $resultado = $db->execute($consulta, $parametros);

    if ($resultado) {
        // El usuario se ha registrado con éxito.
        return true;
    } else {
        // Error al registrar el usuario.
        return false;
    }
}
    // Agrega otros métodos relevantes aquí, como actualizar datos del usuario, obtener información, etc.
}
?>