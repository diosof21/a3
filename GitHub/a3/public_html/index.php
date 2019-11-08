<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
$bbdd=mysqli_connect("localhost", "doliva_dionis", "linuxlinux", "doliva_proyecto1") or die("Access denied.");

include 'view/header.php';

if(!isset($_SESSION["view"]))$_SESSION["view"]="1";
if(!isset($_GET["c"]))$_SESSION["view"]="1";

switch($_GET["c"]) {
	case "1": require("controller/c_login.php"); break;
	case "2": require("controller/c_inicio.php"); break;
	case "3": require("controller/c_registro.php"); break;
}

if (!$_SESSION['user']) { $_SESSION["view"]="1";}

switch($_SESSION["view"]) {
	case "1": require("view/v_login.php"); break;
	case "2": require("view/v_inicio.php"); break;
	case "3": require("view/v_registro.php"); break;
}

$bbdd->close();


?>