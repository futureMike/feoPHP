<?php

if(isset($_GET['derpID'])){
    $derpID = $_GET['derpID'];
}

if(isset($_GET['nID'])){
    $nombre = $_GET['nID'];
}

if(isset($_GET['sID'])){
    $salidos = $_GET['sID'];
}

?>

<!DOCTYPE html>

<html>
<head>
    <title>reply</title>
</head>

<body>
    <p>up and gonna reply to derpID: <?php echo $derpID; ?> in this bitch</p>
    <p>it went like this:</p>
    <blockquote>Mothafukkaz name: <?php echo $nombre; ?> <br>Mothafukkaz jive: <?php echo $salidos; ?></blockquote><br>
    <form method="post" action="insert.php">
        <input type="hidden" name="derpID" value="<?php echo $derpID; ?>">
        <input type="text" name="name" placeholder="your name goes here">
        <input type="text" name="text" placeholder="your reply goes here">
            <input type='submit' value='Submit'>
    </form>
    



</body>
</html>
