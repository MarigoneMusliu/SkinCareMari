<?php
	session_start();
	include("konfigurim.php");
	
	$error = "";
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["Perdoruesi"]) || empty($_POST["Fjalekalimi"]))
		{
			$error = "Kërkohet mbushja e të dy fushave.";
		}else
		{
			$Perdoruesi=$_POST['Perdoruesi'];
			$Fjalekalimi=$_POST['Fjalekalimi'];
			$sql="SELECT ID_Prd  FROM wscm_perdoruesit WHERE Perdoruesi='$Perdoruesi' 
			and Fjalekalimi='$Fjalekalimi'";
			$rezultati=mysqli_query($lidhe,$sql);
			$rreshti=mysqli_fetch_array($rezultati,MYSQLI_ASSOC);
			if(mysqli_num_rows($rezultati) == 1)
			{
				$_SESSION['Perdoruesi'] = $Perdoruesi; 
				header("location: faqja_administruese.php"); 
			}else
			{
				$error = "Gabim përdoruesi ose fjalëkalimi.";
			}
		}
	}
?>