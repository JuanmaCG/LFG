<?php
ob_start();
include_once 'CRUDUsuario.php';
include_once '../views/Perfil.php';

$CRUD = new CRUDUsuario();

if(isset($_POST['modificar'])){
    {
        header('Location: ../views/Perfil.php');
    }
}

if(isset($_POST['sociales'])){
    if($CRUD->modificarDatosSociales($_POST['twitter'], $_POST['facebook'], $_POST['steam'], $_POST['blizzard'], $_POST['twitch'], $_POST['lol'], $_POST['mmr']) === 1){
        header('Location: ../views/Perfil.php');
    }else{
        echo $CRUD->modificarDatosSociales($_POST['twitter'], $_POST['facebook'], $_POST['steam'], $_POST['blizzard'], $_POST['twitch'], $_POST['lol'], $_POST['mmr']);
    }
}

if(isset($_POST['contrasena'])){
    if($CRUD->modificarContrasena($_POST['password'], $_POST['password2']) === 1) {
        header('Location: ../views/Perfil.php');
    }else{
        header('Location: ../views/Perfil.php?error=1');
    }
}


ob_end_flush();