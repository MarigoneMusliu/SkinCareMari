<?php
	include("kontrollim.php");	
?>
<?php
include_once("konfigurim.php");

if(isset($_POST['modifiko']))
{	
	$ID_Prd = $_POST['ID_Prd'];
	
	$Perdoruesi=$_POST['Perdoruesi'];
	$Fjalekalimi=$_POST['Fjalekalimi'];
	$Email=$_POST['Email'];	
	
	if(empty($Perdoruesi) || empty($Fjalekalimi) || empty($Email)) {	
			
		if(empty($Perdoruesi)) {
			echo "<font color='red'>Përdoruesi është i zbrazët.</font><br/>";
		}
		if(empty($Fjalekalimi)) {
			echo "<font color='red'>Fjalëkalimi është i zbrazët.</font><br/>";
		}
		if(empty($Email)) {
			echo "<font color='red'>Email është i zbrazët.</font><br/>";
		}		
	} else {	
		$rezultati = mysqli_query($lidhe,"UPDATE wscm_perdoruesit SET Perdoruesi='$Perdoruesi',Fjalekalimi='$Fjalekalimi',Email='$Email' WHERE ID_Prd=$ID_Prd");
		
		header("Location: modifiko_perdorues.php");
	}
}
?>
<?php
$ID_Prd = $_GET['ID_Prd'];

$rezultati = mysqli_query($lidhe,"SELECT * FROM wscm_perdoruesit WHERE ID_Prd=$ID_Prd");

while($res = mysqli_fetch_array($rezultati))
{
	$Perdoruesi = $res['Perdoruesi'];
	$Fjalekalimi = $res['Fjalekalimi'];
	$Email = $res['Email'];
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
		<title>Skin Care Mari</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

			<div id="wrapper">

				<div id="main">
					<div class="inner">

					<?php include_once("fillimi_faqes.php"); ?>
							
					<p style="text-align: right;">Hi, <em><?php echo $login_user;?>!</em></p> 

						<section id="main" class="wrapper">
							<div class="inner">
								<div class="content">
									<div class="row">
										<form name="form1" method="post" action="modifiko.php">
											<h3>Modify user data</h3>
											User
											<input type="text" name="Perdoruesi" value='<?php echo $Perdoruesi;?>' />
											<br>
											Password
											<input type="text" name="Fjalekalimi" value='<?php echo $Fjalekalimi;?>' />
											<br>
											Email
											<input type="text" name="Email" value='<?php echo $Email;?>' />
											<br>
											<input type="hidden" name="ID_Prd" value='<?php echo $_GET['ID_Prd'];?>' />
											<input type="submit" name="modifiko" value="Modify">
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