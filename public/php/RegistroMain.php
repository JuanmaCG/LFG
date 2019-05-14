<?php

include_once 'Registro.php';

$registro = new Registro();

if($registro->registrarUsuario($_POST['username'], $_POST['password'],$_POST['password-repeated'], $_POST['nombre'],$_POST['apellidos'], $_POST['poblacion']) === 1){
    header('Location: ../views/login.php');
}else if($registro->registrarUsuario($_POST['username'], $_POST['password'],$_POST['password-repeated'], $_POST['nombre'],$_POST['apellidos'], $_POST['poblacion']) === -1){
    header('Location: ../views/registro.html');
/*    echo $registro->registrarUsuario($_POST['username'], $_POST['password'],$_POST['password-repeated'], $_POST['nombre'],$_POST['apellidos'], $_POST['poblacion']);*/
}else{
    header('Location ../views/registro.html');
/*    echo $registro->registrarUsuario($_POST['username'], $_POST['password'],$_POST['password-repeated'], $_POST['nombre'],$_POST['apellidos'], $_POST['poblacion']);*/

}