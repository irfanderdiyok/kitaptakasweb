<?php
ob_start();
session_start();


$_SESSION['gonderen'] = $_GET['gonderen'];


header("Location: sohbet.php");



ob_end_flush();
