<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Skin Care Mari</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
	<?php

include_once("konfigurim.php");

if(isset($_POST['shto_oferta'])) {	
	$ProductName=$_POST['ProductName'];
	$Description=$_POST['Description'];
	$ID_Brands=$_POST['ID_Brands'];
	$QuantityInStock=$_POST['QuantityInStock'];
	$Pershkrimi=$_POST['Pershkrimi'];
	
	$foto =addslashes (file_get_contents($_FILES['foto']['tmp_name']));
	$emrifotos = $_FILES['foto']['name'];
		
	$maxsize = 10000000; //set to approx 10 MB
	
	// checking empty fields
	if(empty($ProductName) ||empty($Description) ||empty($ID_Brands) || empty($QuantityInStock) || empty($Pershkrimi) || empty($foto)) {
				
		if(empty($ProductName)) {
			echo "<font color='red'>ProductName is empty </font><br/>";
		}
		if(empty($Description)) {
			echo "<font color='red'>Descriptiom is empty.</font><br/>";
		}
		if(empty($ID_Brands)) {
			echo "<font color='red'>Brand is empty.</font><br/>";
		}
		
		}
		if(empty($QuantityInStock)) {
			echo "<font color='red'>QuantityInStock is empty.</font><br/>";
		}
		if(empty($Pershkrimi)) {
			echo "<font color='red'>Përshkrimi is empty.</font><br/>";
		}
		if(empty($foto)) {
			echo "<font color='red'>Foto is empty.</font><br/>";
		}
		
	} else { 
			
		$rezultati = mysqli_query($lidhe, "INSERT INTO products(ProductName, Description, ID_Brands, QuantityInStock, Pershkrimi, foto, emrifotos)
		 VALUES('$ProductName','$Description','$ID_Brands', '$QuantityInStock','$Pershkrimi','$foto','$emrifotos')");
		
	echo "<script>
         setTimeout(function(){
            window.location.href = 'menaxho_oferta.php';
         }, 5000);
      </script>";
		 echo"<p><b> The offer is being registered in the system. Please wait 5 seconds. <b></p>";
	
	}
}
?>
			
	</body>
</html>