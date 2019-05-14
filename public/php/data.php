<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "usuarios";
$sql = "Select users.name, users.lastName, users.username, users.perfil, socialmedia.mmr from users join socialmedia";

$conn = new mysqli($servername, $username, $password, $dbname);

$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$data = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
    $data[] = $rows;
}
$results = array(
    "sEcho" => 1,
    "iTotalRecords" => count($data),
    "iTotalDisplayRecords" => count($data),
    "aaData"=>$data);
echo json_encode($results);
?>