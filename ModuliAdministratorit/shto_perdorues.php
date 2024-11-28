<?php
	include("kontrollim.php");	
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

					<section>
			
					<h3>Add user data</h3>

						<form method="post" action="shto.php"> 
							<div class="row gtr-uniform">
								<div class="col-6 col-12-xsmall">
									<input type="text" name="Perdoruesi" id="username" value="" placeholder="Username" />
									<br>
									<input type="password" name="Fjalekalimi" id="password" value="" placeholder="Password" />
									<br>
									<input type="email" name="Email" id="email" value="" placeholder="Email" />
								</div>	
									<br>
								<div class="col-12">
									<ul class="actions">
										<li><input type="submit" name="shto" value="Add" class="primary" /></li>				
									</ul>
								</div>
							</div>
						</form>

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