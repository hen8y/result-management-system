<?php
session_start();
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
if (strlen($_SESSION['id']==0)) {
  header("Location:https://demo.henrydev.org/henrycollege/admin/pages/login.php");
  } 
?>