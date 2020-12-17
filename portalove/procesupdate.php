<?php

if(isset($_POST['potvrd'])) {


    try {
        $db = new PDO('mysql:host=localhost;dbname=portalove;charset=utf8', 'root', '');

        $nazov = $_POST['nazov'];
        $url = $_POST['url'];

        $urob = "UPDATE tab SET link='$url' WHERE meno='$nazov'";


        $stmt = $db->prepare($urob);
        $stmt->execute();


    }
    catch(PDOException $eror)
    {
        echo $eror;
    }

    $db = null;
}
header("Location:index.php");
?>