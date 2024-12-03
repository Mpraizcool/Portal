<?php
$servername = "localhost";
$username = "root";
$password = "";
$sett = new mysqli($servername, $username, $password);
$crea = mysqli_query($sett, "CREATE DATABASE portal");
if (!$crea) {
   echo "Database Creation Failed";
}
?>