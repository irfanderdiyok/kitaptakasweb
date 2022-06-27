<?php
session_start();

if (!empty($_POST)) {
    require "veritabani.php";
    try {
        $mesaj = $_POST["mesaj"];
        $id =  $_SESSION['id'] ;
        $gonderilenid =  $_SESSION['gonderen'];
        $sorgu = $db->prepare("INSERT INTO chat(gonderen_ID, alan_ID, mesaj) VALUES(?, ?, ?)");
        $sorgu->bindParam(1, $id, PDO::PARAM_INT);
        $sorgu->bindParam(2, $gonderilenid, PDO::PARAM_INT);
        $sorgu->bindParam(3, $mesaj, PDO::PARAM_STR);
        $sorgu->execute();

        $db = null;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

?>