<html>
	<head>
		<title>Administration Module</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />		
	</head>
	<body>
<?php

include_once("konfigurim.php");

if(isset($_POST['shto_Brands'])) {	
	$Brands = $_POST['Brands'];	
	
	if(empty($Brands)) {			
		if(empty($Brands)) 
	{
		echo "<font color='red'>The Brands field is empty.</font><br/>";
	}			
		echo "<br/><a href='javascript:self.history.back();'>Kthehu</a>";
	} else { 
		
		$rezultati = mysqli_query($lidhe, "INSERT INTO wscm_Brands(Brands) VALUES('$Brands')");

		echo "<script>
         setTimeout(function(){
            window.location.href = 'menaxho_Brands.php';
         }, 5000);
      </script>";
		 echo"<p><b>   The data is being registered in the system. Please wait 5 seconds.<b></p>";
	
	}
}
?>
	</body>
</html>
