<?php
	include("kontrollim.php");	
?>
<?php
include_once("konfigurim.php");

if(isset($_POST['modifiko_Brands']))
{	
	$ID_Brands=$_POST['ID_Brands'];
	$Brands=$_POST['Brands'];
	
	if(empty($Brands) )
		{			
		if(empty($Brands)) {
			echo "<font color='red'>Brands është i zbrazët.</font><br/>";
		}
	} else {	
	
		$rezultati = mysqli_query($lidhe,"UPDATE wscm_Brands SET Brands='$Brands' WHERE ID_Brands =$ID_Brands ");
		
		header("Location: menaxho_Brands.php");
	}
}
?>
<?php

$ID_Brands = $_GET['ID_Brands'];

$rezultati = mysqli_query($lidhe,"SELECT * FROM wscm_Brands WHERE ID_Brands=$ID_Brands");

while($res = mysqli_fetch_array($rezultati))
{
	$Brands = $res['Brands'];
}
?>

<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Administration Module</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<div id="wrapper">
			<div id="main">
				<div class="inner">
		
					<?php include_once("fillimi_faqes.php"); ?>
		
					<section id="main" class="wrapper">
						<div class="inner">
							<p style="text-align:right;">Hi, <em><?php  echo $login_user;?>!</em></p>
							<div class="content">
								<div class="row">
									<form name="form1" method="post" action="modifiko_Brands.php">
										<h3>Modifiko të dhënat e Brandst</h3>
										Brands
										<input type="text" name="Brands" value='<?php echo $Brands;?>' required />
										<br>
										<input type="hidden" name="ID_Brands" value='<?php echo $_GET['ID_Brands'];?>' />
										<input type="submit" name="modifiko_Brands" value="Modifiko">
									</form>
								</div>
							</div>
						</div>
					</section>

				</div>
			</div>

					<div id="sidebar">
						<div class="inner">

							<?php include_once("meny.php"); ?>

							<?php include_once("fundi_faqes.php"); ?>

						</div>
					</div>

		</div>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>