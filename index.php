<?php
include_once("GYM.HTML");
include 'CSS/GYM.css';

$name=$email=$feed="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{$name=htmlspecialchars($_POST["fname"]);
$email=$_POST["noemail"];
$feed=$_POST["views"];
?>

