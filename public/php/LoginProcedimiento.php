<?php
include 'Login.php';

$login = new Login();


if($login->login($_POST['username'], $_POST['password'])){
    header('Location: ../views/Perfil.php');
}else{
    header('Location: ../views/login.php');
}