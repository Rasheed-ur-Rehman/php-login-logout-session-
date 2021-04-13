<?php 
include'config.php';
session_start();
$user=$_SESSION['login'];

if (!isset($_SESSION['login'])) {
	
	header('login.php');
}

 ?>