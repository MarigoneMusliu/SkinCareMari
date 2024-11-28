<?php
	include("kontrollim.php");	
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Skin Care Shop Mari</title>
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
								<header class="major">
									<h2>Menaxhimi i të dhënave të ballinës</h2>
								</header>
								<div class="features">

									<article>
									<a href="menaxho_oferta.php"><span class="icon solid fa-paper-plane"></span></a>
										<div class="content">
											<a href="menaxho_oferta.php"><h3>Menaxho Oferta</h3></a>
											<p>Forma për menaxhimin e ofertave në uebaplikacion me të drejtat të administratorit.</p>
										</div>
									</article>
									<article>
									<a href="menaxho_Brands.php"><span class="icon solid fa-paper-plane"></span></a>
										<div class="content">
											<a href="menaxho_Brands.php"><h3>Menaxho Brands</h3></a>
											<p>Forma për menaxhimin e Brandst në uebaplikacion me të drejtat të administratorit.</p>
										</div>
									</article>
									<br>
									<article>
									<a href="menaxho_tedhenat.php"><span class="icon solid fa-paper-plane"></span></a>
										<div class="content">
											<a href="menaxho_tedhenat.php"><h3>Menaxho të dhënat</h3></a>
											<p>Forma për menaxhimin e të dhënave në uebaplikacion me të drejtat të administratorit.</p>
										</div>
                                    </article>
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