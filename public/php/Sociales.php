<?php
include_once 'CRUDUsuario.php';
include_once '../views/Perfil.php';

$CRUD = new CRUDUsuario();

if(isset($_POST['sociales'])){
    if($CRUD->modificarDatosSociales($_POST['twitter'], $_POST['facebook'], $_POST['steam'], $_POST['blizzard'], $_POST['twitch']) === 1){
       echo 'eoesa';
    }else{
        echo 'hola';
    }
}