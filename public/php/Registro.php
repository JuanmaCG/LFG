<?php

include_once 'Conexion.php';

class Registro {

    private $conexion;

    public function __construct()
    {
        $conn = new Conexion();
        $this->conexion = $conn->getConexion();
    }

    private function buscarUsuario($usuario){
        $buscarUsuario = "SELECT * FROM users
                    WHERE username = '$usuario' ";

        $result = $this->conexion->query($buscarUsuario);

        $count = mysqli_num_rows($result);

        if ($count == 1) {
            return true;
        }else{
            return false;
        }
    }

    public function registrarUsuario($usuario, $password, $password2, $nombre, $apellidos, $poblacion){
        if(!$this->buscarUsuario($usuario)){
            $form_pass = $password;

            if($password !== $password2){
                return 0;
            }



            $hash = password_hash($form_pass, PASSWORD_BCRYPT);

            $query = "INSERT INTO users (username, password, name, lastName, poblacion, picture )
                VALUES ('$usuario', '$hash', '$nombre', '$apellidos', '$poblacion', '../images/icono.png')";

            $social = "insert into socialmedia(username) values('$usuario')";


            if ($this->conexion->query($query) === TRUE && $this->conexion->query($social) === TRUE) {
                return 1;
            }else {
                return $this->conexion->error;
            }
        }
    }
}

