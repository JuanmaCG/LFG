<?php

include_once "Conexion.php";


class CRUDUsuario
{

    private $conexion;

    public function __construct()
    {
        $conn = new Conexion();
        $this->conexion = $conn->getConexion();
    }

    public function leerDatos($usuario)
    {

        $stmt = $this->conexion->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_object();

        return $user;
    }

    public function socialMedia($usuario)
    {



        $stmt = $this->conexion->prepare("SELECT * FROM socialmedia WHERE username = ?");
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_object();

        return $user;
    }


    public function modificarDatosPersonales($nombre, $apellidos, $email, $provincia)
    {




        $username = $_SESSION['username'];


        $modificacion = "update users set name = '$nombre', lastName = '$apellidos', email = '$email', poblacion = '$provincia' where username = '$username'";

        if ($this->conexion->query($modificacion)) {
            return 1;
        } else {
            return 0;
        }

    }


    public function modificarDatosSociales($twiiter, $facebook, $steam, $blizzard, $twitch, $lol, $mmr){

        $username = $_SESSION['username'];

        $modificacion = "update socialmedia set twitter = '$twiiter', facebook = '$facebook', steam = '$steam', blizzard = '$blizzard', twitch = '$twitch', league = '$lol', mmr = $mmr where username = '$username'";

        if($this->conexion->query($modificacion)){
            return 1;
        }else{
            return $this->conexion->errno;
        }

    }

    public function modificarContrasena($password, $passwordConfirm){

        if ($password !== $passwordConfirm) {
            return -1;
        }

        $username = $_SESSION['username'];

        $hash = password_hash($password, PASSWORD_BCRYPT);

        $query = "update users set password ='$hash' where username = '$username'";

        if($this->conexion->query($query)){
            return 1;
        }else{
            return $this->conexion->errno;
        }
    }
}

