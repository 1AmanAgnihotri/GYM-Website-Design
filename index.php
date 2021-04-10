<?php
include_once("GYM.HTML");


$name=$email=$feed="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{$name=htmlspecialchars($_POST["fname"]);
$email=$_POST["noemail"];
$feed=$_POST["views"];
?>
<style>
<?php include 'CSS/GYM.css'; ?>
</style>
