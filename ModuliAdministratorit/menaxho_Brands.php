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
											<div class="col-12 col-12-medium">

											<h3>Shto transport</h3>
											
												<div class="table-wrapper">
													<form method="post" action="shto_Brands.php">
														<div class="table-wrapper">
															<div class="row gtr-uniform">
																<div class="col-6 col-12-xsmall">
																	<input type="text" name="Brands" id="Brands" value="" placeholder="Brands" />
																</div>
																<div class="col-6">
																	<ul class="actions">
																	<li><input type="submit" name="shto_Brands" value="Shto" class="primary" /></li>
																	</ul>
																</div>
															</div>
														</div>
													</form>
													<br>
													<form action="" method="post">  
														<br><br>
														<table>
															<tr>
																<h3>Kërko Brands për modifikim ose fshirje</h3>
															</tr>
															<tr>
																<td>
																Shkruaj:
																</td>
																<td>
																<input type="text" name="term" placeholder="Brands" value=""/>
																</td>
																<td> <input type="submit" value="Kërko" /></td>
															</tr>
														</table> 
													</form> 
													<div class="table-wrapper">
														<table width='80%' border=0>
															<div class="table-wrapper">
																<tr>
																	<td>Brands</td>
																	<td>Modify</td>
																	<td>Delete</td>
																</tr> 
														<?php
														if (!empty($_REQUEST['term'])) {
														$term = mysqli_real_escape_string
														($lidhe,$_REQUEST['term']);     
														$sql = mysqli_query($lidhe,
														"SELECT * FROM wscm_Brands
														WHERE Brands LIKE '%".$term."%'"); 
														while($rreshti = mysqli_fetch_array($sql)) { 		
																echo "<tr>";
																echo "<td>".$rreshti['Brands']."</td>";
																echo "<td><a href=\"modifiko_Brands.php?ID_Brands=$rreshti[ID_Brands]\" class='button' class='button primary'>Modifiko</a></td>";
																echo "<td><a href=\"fshije_Brands.php?ID_Brands=$rreshti[ID_Brands]\" onClick=\"return confirm('Are you sure you want to delete the Brand?')\" class='button' class='button primary'>Delete</a>
																</td></tr>";		
															}
														}
														?>
															</div>
														</table>															
													</div>
												</div>		
											</div>
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