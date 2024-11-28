<?php
include("konfigurim.php");

$ID_product = $_GET['ID_product'];

$rezultati = mysqli_query($lidhe,"DELETE FROM products WHERE ID_product=$ID_product");

header("Location:menaxho_oferta.php");
?>

