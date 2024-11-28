<html>
	<head>
		<title>Users module</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

<?php
include_once("konfigurim.php");

if(isset($_POST['shto_kontakti'])) {	
	$Subjekti = $_POST['Subjekti'];
	$Mesazhi = $_POST['Mesazhi'];
	$Email = $_POST['Email'];

	if(empty($Subjekti) || empty($Mesazhi) || empty($Email)) {			
		if(empty($Subjekti)) {echo "<font color='red'>The Subject field is empty.</font><br/>";}
		if(empty($Mesazhi)) {echo "<font color='red'>The Message field is empty.</font><br/>";}
		if(empty($Email)) {echo "<font color='red'>The Email field is empty.</font><br/>";}
		
		echo "<br/><a href='javascript:self.history.back();'>Go back</a>";
	} else { 
		$rezultati = mysqli_query($lidhe, "INSERT INTO wscm_kontakti (Subjekti,Mesazhi,Email) VALUES('$Subjekti','$Mesazhi','$Email')");

		echo "<script>
		setTimeout(function(){
		   window.location.href = 'index.php';
		}, 5000);
	 </script>";
		echo"<p><b> The contact is being registered in the system. Please wait 5 seconds. <b></p>";
   }
}
?>
</body>
</html>
