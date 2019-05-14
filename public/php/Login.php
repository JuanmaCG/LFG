<?php

include_once 'Conexion.php';

class Login{

    private $conexion;

    public function __construct()
    {
        $conn = new Conexion();
        $this->conexion = $conn->getConexion();
    }

    public function login($usuario, $contrasena){

        session_start();



        $stmt = $this->conexion->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_object();

        if ( password_verify( $contrasena, $user->password ) ) {

            $_SESSION['username'] = $user->username;
            $_SESSION['name'] = $user->nombre;
            $_SESSION['apellidos'] = $user->apellidos;
            $_SESSION['email'] = $user->email;
            $_SESSION['provincia'] = $user->poblacion;

            return true;
        }else {
            return false;
        }

    }

}

