<?php 

include 'unir.php';


if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
}
if(isset($_POST['salidos'])){
    $salidos = $_POST['salidos'];
}

$stmt = $db->prepare("INSERT INTO `derps` (nombre, salidos) VALUES(?, ?)");
$stmt->bind_param('ss', $nombre, $salidos);
$stmt->execute();
$stmt->close();

header("Location: index.php");

?>