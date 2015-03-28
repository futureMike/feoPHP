<?php


include 'unir.php';


$sql = ("SELECT * FROM `derps`");
$result = $db->query($sql);

$rSql = ("SELECT * FROM `replies`");
$rResult = $db->query($rSql);



?>

<!DOCTYPE html>

<html>
<head>
    <title>Dejanos un derp!</title>
</head>

<body>
    <?php
    while($row = $result->fetch_object()){
    $nombre = htmlentities($row->nombre, ENT_QUOTES, 'UTF-8');
    $salidos = htmlentities($row->salidos, ENT_QUOTES, 'UTF-8');
    $id = $row->id;
    ?>
    <p> Mi nombre es: <?php echo $nombre; ?></p>
    <p> Aqui esta mis salidos: <?php echo $salidos; ?></p>
    <a href='reply.php?derpID=<?php echo $id; ?>&nID=<?php echo $nombre; ?>&sID=<?php echo $salidos; ?>'>reply</a><br>
    <?php while ($rRow = $rResult->fetch_object()){
         $derpID = $rRow->derpID;
         $name = htmlentities($rRow->name, ENT_QUOTES, 'UTF-8');
         $text = htmlentities($rRow->text, ENT_QUOTES, 'UTF-8');
         if($derpID == $id){
            ?>
            <p>reply from <?php echo $name; ?>: <?php echo $text; ?></p>
            <?php
         }else { $derpID++;}
         ?>
         <?php
    }
    ?>
    <hr>
    <?php
    }
    ?>
    

<form method='post' action='insert.php'>
    <input type='text' name='nombre' placeholder='escribe su nombre aqui'>
    <input type='text' name='salidos' placeholder='dejanos un derp'>
    <input type='submit' value='Submit'>
    </form>



</body>
</html>
