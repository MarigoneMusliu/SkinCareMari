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
		<title>Skin Care  Mari </title>
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
										<h2>Management of Contact data:</h2>
									</header>					
									<br>
									<section id="main" class="wrapper">
										<div class="inner">
											<div class="content">
												<div class="row">
													<div class="table-wrapper">
														<form action="" method="post">  		
														<table>
															<tr>
															<h3>Request contact details for deletion</h3>
																</tr>
															<tr>
															<td>
																Write:
															</td>
															<td>
																<input type="text" name="term" placeholder="Subject or Message "/>
															</td>
															<td> 
																<input type="submit" value="Search" /></td>
															</tr>
														</table> 
														</div>
														</div>
													</form> 
															<div class="table-wrapper">
														<table>
															<div>
															<tr>
																<td>Subject</td>
																<td>Message</td>
																<td>Email</td>
																
																<td>Delete</td>
															</tr> 
														<?php
														if (!empty($_REQUEST['term'])) {
														$term = mysqli_real_escape_string
														($lidhe,$_REQUEST['term']);     
														$sql = mysqli_query($lidhe,
														"SELECT * FROM wscm_kontakti
														WHERE Subjekti LIKE '%".$term."%' 
														OR  Mesazhi LIKE '%".$term."%'"); 
														while($rreshti = mysqli_fetch_array($sql)) { 		
																echo "<tr>";
																echo "<td>".$rreshti['Subjekti']."</td>";
																echo "<td>".$rreshti['Mesazhi']."</td>";
																echo "<td>".$rreshti['Email']."</td>";	
																echo "<td><a href=\"fshijekontaktin.php?ID_Kontakti=$rreshti[ID_Kontakti]\" onClick=\"return confirm('Are you sure you want to delete the contact?')\" class='button' class='button primary'>Delete</a>
																</td></tr>";		
															}
														}
														?>
														</div>
													</table>
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