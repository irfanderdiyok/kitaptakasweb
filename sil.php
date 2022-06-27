<?php ob_start(); ?>
<?php



if ($_GET) {


    $silinecek = $_GET['silinecek'];
    require "./veritabani.php";


    $sorgu = $db->prepare("DELETE FROM kitap WHERE Id = ?");
    $sorgu->execute(array($silinecek));


    header("Location: benimpaylastigim.php");
}







ob_end_flush(); ?>
