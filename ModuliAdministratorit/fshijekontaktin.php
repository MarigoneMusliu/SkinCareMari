<?php
include("konfigurim.php");

$ID_Kontakti = $_GET['ID_Kontakti'];

$rezultati = mysqli_query($lidhe,"DELETE FROM wscm_kontakti WHERE ID_Kontakti=$ID_Kontakti");

header("Location:contact.php");
?>

