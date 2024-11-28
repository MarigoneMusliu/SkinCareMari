<?php

include("konfigurim.php");

$ID_Brands = $_GET['ID_Brands'];

$rezultati = mysqli_query($lidhe,"DELETE FROM wscm_Brands WHERE ID_Brands=$ID_Brands");

header("Location:menaxho_Brands.php");
?>

