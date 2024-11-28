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

if(isset($_POST['shto'])) {	
	$Perdoruesi = $_POST['Perdoruesi'];
	$Fjalekalimi = $_POST['Fjalekalimi'];
	$Email = $_POST['Email'];
		
	if(empty($Perdoruesi) || empty($Fjalekalimi) || empty($Email)) {			
		if(empty($Perdoruesi)) {echo "<font color='red'>User field is empty.</font><br/>";}
		if(empty($Fjalekalimi)) {echo "<font color='red'>Password field is empty.</font><br/>";}
		if(empty($Email)) {echo "<font color='red'>Email field is empty.</font><br/>";}
	
		echo "<script>
		setTimeout(function(){
		   window.location.href = 'shto_perdorues.php';
		}, 5000);
	 </script>";
		echo"<p><b>   Ju lutem prisni 5 sekonda deri sa të ktheheni në formën e shtimit të përdoruesve. <b></p>";
   
	} else { 
	
		$rezultati = mysqli_query($lidhe, "INSERT INTO wscm_perdoruesit(Perdoruesi,Fjalekalimi,Email) VALUES('$Perdoruesi','$Fjalekalimi','$Email')");
	
	echo "<script>
         setTimeout(function(){
            window.location.href = 'perdoruesit.php';
         }, 5000);
      </script>";
		 echo"<p><b>   The data is being registered in the system. Please wait 5 seconds.<b></p>";
		
	}
}
?>
	</body>
</html>