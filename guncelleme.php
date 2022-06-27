<?php
session_start();


require "veritabani.php";

$stmt = $db->prepare("SELECT * FROM chat WHERE gonderen_ID=? AND alan_ID=? OR gonderen_ID=? AND alan_ID=? ");
$stmt->execute(array($_SESSION['id'], $_SESSION['gonderen'],$_SESSION['gonderen'], $_SESSION['id']));

$data = $stmt->fetchAll();
foreach ($data as $row) {
    if ($row['gonderen_ID'] == $_SESSION['id']) {
        $veriler[] = '<li class="message mine">
        <p class="text">' . $row['mesaj'] . '</p>
      
    </li>';
    } else {
        $veriler[] = '<li class="message">
        <p class="text">' . $row['mesaj'] . '</p>
        
    </li>';
    }
}
$db = null;
// <span class="date"> ' . $row['tarih'] . '</span>
echo json_encode($veriler);
