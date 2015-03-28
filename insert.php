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

if(isset($_POST['derpID'])){
    $derpID = $_POST['derpID'];
    $name = $_POST['name'];
    $text = $_POST['text'];

$stmt = $db->prepare("INSERT INTO `replies` (derpID, name, text) VALUES(?, ?, ?)");
$stmt->bind_param('iss', $derpID, $name, $text);
$stmt->execute();
$stmt->close();

}

header("Location: index.php");

?>