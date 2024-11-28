<?php
	include("kontrollim.php");	
?>
<?php
include_once("konfigurim.php");

if(isset($_POST['modifikotedhenat']))
{	
	$ID_edhena = $_POST['ID_edhena'];
	
	$Titulli=$_POST['Titulli'];
	$Pershkrimi=$_POST['Pershkrimi'];
	$Dosja=$_POST['Dosja'];
	$Pozicioni_faqes=$_POST['Pozicioni_faqes'];

	if(empty($Titulli) || empty($Pozicioni_faqes)
    ) {
				
		if(empty($Titulli)) {
			echo "<font color='red'>Titulli është i zbrazet.</font><br/>";
		}
		
		if(empty($Pozicioni_faqes)) {
			echo "<font color='red'>Pozicioni faqes është i zbrazet.</font><br/>";
		}
		
	} else {	
		$rezultati = mysqli_query($lidhe,"UPDATE wscm_tedhenat SET Titulli='$Titulli', Pershkrimi='$Pershkrimi', Dosja='$Dosja', Pozicioni_faqes='$Pozicioni_faqes' WHERE ID_edhena=$ID_edhena");

		header("Location: menaxho_tedhenat.php");
	}
}
?>
<?php
$ID_edhena = $_GET['ID_edhena'];

$rezultati = mysqli_query($lidhe,"SELECT * FROM wscm_tedhenat WHERE ID_edhena=$ID_edhena");

while($res = mysqli_fetch_array($rezultati))
{
	$Titulli = $res['Titulli'];
	$Pershkrimi = $res['Pershkrimi'];
	$Dosja = $res['Dosja'];
	$Pozicioni_faqes = $res['Pozicioni_faqes'];
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
							
							<header id="header">
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul>
								</header>

								<<section id="banner">
									<div class="content">
										<header>
											 <h1>Skin Care Mari</h1> 
										</header> 
									</div>
									<span class="image object">
										<img src="images/Foto1.jpg" alt="" />
									</span>
								</section>
	
							<p style="text-align: right;">Hi, <em><?php echo $login_user;?>!</em></p> 

							<section id="main" class="wrapper">
								<div class="inner">
									<div class="content">
					
										<div class="row">
											<div class="table-wrapper">
												<form enctype="multipart/form-data"  action="modifikotedhenat.php" method="post" name="form1">
													<table>									
													<h3>Modifiko të dhënat</h3>
														<tr> 
															<td>Titulli</td>
															<td><input type="text" name="Titulli" value='<?php echo $Titulli;?>' required/></td>
														</tr>
														<tr>
															<td>Përshkrimi</td>
															<td><textarea name="Pershkrimi" id="demo-message" placeholder="Pershkruaj" rows="3"><?php echo $Pershkrimi;?></textarea></td>
														</tr>														
														<tr> 
															<td>Dosja</td>
															<td><input type="text" name="Dosja" value='<?php echo $Dosja;?>'/></td>
														</tr>
														<tr> 
															<td>Pozicioni i faqes</td>
															<td><input type="text" name="Pozicioni_faqes" value='<?php echo $Pozicioni_faqes;?>' required/></td>
														</tr>														
														<tr> 
															<td><input type="hidden" name="ID_edhena" value='<?php echo $_GET['ID_edhena'];?>' /></td>
															<td><input type="submit" name="modifikotedhenat" value="Modifiko"></td>
														</tr>														
													</table>
												</form>
											</div>
										</div>
									</div>
								</div>
							</section>
							
				</div>
			</div>

				<div id="sidebar">
					<div class="inner">

					<nav id="menu">
						<header class="major">
							<h2>Menytë</h2>
						</header>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="elements.php">Elements</a></li>
							<li><a href="shop.php">Shop</a></li>
							<li><a href="aboutus.php">About Us</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="perdoruesit.php">Përdoruesit</a></li>
							<li><a href="ckycu.php">Ckycu</a></li>	
						</ul>
					</nav>
			
					<section>			
						<ul class="contact">
							<li class="icon solid fa-envelope"><a href="#">marigonamusliu48@gmail.com</a></li>	
							<li class="icon solid fa-phone">+383 49 733 741</li>									
							<li class="icon solid fa-home">Gjilan 60000</li>								
						</ul>			
						<p class="copyright">&copy; Untitled.All rights reserved.
						Pictures: <a href="https://unsplash.com/">Unsplash</a>.
						Template Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
            		</section>

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