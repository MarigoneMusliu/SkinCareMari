<?php
include("konfigurim.php");

$ID_Prd = $_GET['ID_Prd'];

$rezultati = mysqli_query($lidhe,"DELETE FROM wscm_perdoruesit WHERE ID_Prd=$ID_Prd");

header("Location:fshije_perdorues.php");
?>

