<?php

ob_start();
include_once '../views/Perfil.php';



$file_upload_flag="true"; // Flag to check conditions
$file_up_size=$_FILES['file']['size'];

if ($_FILES['file']['size']>500000){
    $file_upload_flag="false";
}

// allow only jpeg or gif files, remove this if not required //
if (!($_FILES['file']['type'] =="image/jpeg" OR $_FILES['file']['type'] =="image/gif" OR $_FILES['file']['type'] =="image/png")){

    $file_upload_flag="false";
}

$file_name=$_FILES['file']['name'];

$add="../upload/$file_name";

if($file_upload_flag=="true") { // checking the Flag value
    if (move_uploaded_file($_FILES['file']['tmp_name'], $add)) {


        $conexion =  new mysqli("localhost", "root", "root", "usuarios");
        $username = $_SESSION['username'];

        $query = "update users set picture = '$add' where username = '$username'";


        $subida = $conexion->query($query);

        if ($subida) {
            header('Location: ../views/Perfil.php');
        }

    }

}
ob_end_flush();