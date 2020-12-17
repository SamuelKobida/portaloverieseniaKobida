<?php

if(isset($_POST['potvrd'])) {



    try {
        $db = new PDO('mysql:host=localhost;dbname=portalove;charset=utf8', 'root', '');

        $nazov = $_POST['nazov'];
        $popis = $_POST['popis'];
        $adresa = $_POST['adresa'];
        $url = $_POST['url'];


        $odstran = "DELETE FROM tab WHERE meno='$nazov' AND text='$popis' AND obrazok='$adresa' AND link='$url'";
        $db->exec($odstran);

        //vypis uspesneho zmazania (chybu aj tak nevidno) =ajax

    } catch (PDOException $e) {
        echo $e;
    }
}
header("Location:index.php");
?>