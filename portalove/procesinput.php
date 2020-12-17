<?php


if(isset($_POST['potvrd'])) {

    try {

        $db = new PDO('mysql:host=localhost;dbname=portalove;charset=utf8', 'root', '');


        $nazov = $_POST['nazov'];
        $popis = $_POST['popis'];
        $adresa = $_POST['adresa'];
        $url = $_POST['url'];

        $pridaj = "INSERT INTO tab (meno, text, obrazok,link) VALUES ('$nazov', '$popis', '$adresa', '$url')";
        $db->exec($pridaj);

        ////vypis uspesneho pridania ($e aj tak nevidno) =ajax

    } catch (PDOException $e) {
        echo $e;
    }
}
$db = null;
header("Location:index.php");
?>