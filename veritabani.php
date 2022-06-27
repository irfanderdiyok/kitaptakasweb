<?php

$dsn = 'mysql:host=localhost;port=3307;dbname=kitaptakas';
$user = 'root';
$password = 'usbw';

$db;

try {

    $db = new PDO($dsn, $user, $password);
    $db->exec("SET NAMES utf8");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo 'Connection failed: ' . $e->getMessage();
}
