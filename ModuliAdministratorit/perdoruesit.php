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
			
				<!-- Section -->
					<section>
						<header class="major">
							<h2>Users</h2>
						</header>
						<div class="features">	
							<article>
								<a href="shto_perdorues.php"><span class="icon solid fa-paper-plane"></a></span>
									<div class="content">
										<a href="shto_perdorues.php"><h3>Add User</h3></a>
										<p>Form for adding Users in the Web application with administrator rights.</p>
									</div>
							</article>
							<article>
								<a href="modifiko_perdorues.php"><span class="icon solid fa-paper-plane"></a></span>
									<div class="content">
										<a href="modifiko_perdorues.php"><h3>Modify User</h3></a>
										<p>Form for modifying Users in the Web application with administrator rights.</p>
									</div>
							</article>
							<article>
								<a href="fshije_perdorues.php"><span class="icon solid fa-paper-plane"></a></span>
									<div class="content">
										<a href="fshije_perdorues.php"><h3>Delete User</h3></a>
										<p>Form for deleting Users in the Web application with administrator rights.</p>
									</div>
							</article>
						</div>
						<br>
						<div class="inner">
							<div class="content">
								<div class="row">
									<div class="table-wrapper">
										<form action="" method="post">  
											<table>
												<tr>
													<h3>Search user data</h3>
												</tr>
												<tr>
													<td>
													Write:
													</td>
													<td>
													<input type="text" name="term" value="%" placeholder="User or Email"/>
													</td>
													<td> 
													<input type="submit" value="Search" /></td>
												</tr>
											</table> 
										</form> 													
									</div>
								</div>
								<div class="table-wrapper">
									<table>
										<tr>
											<td>User</td>
											<td>Password</td>
											<td>Email</td>
										</tr> 
													<?php
													if (!empty($_REQUEST['term'])) {
													$term = mysqli_real_escape_string
													($lidhe,$_REQUEST['term']);     
													$sql = mysqli_query($lidhe,
													"SELECT * FROM wscm_perdoruesit 
													WHERE Perdoruesi LIKE '%".$term."%' 
													OR  Email LIKE '%".$term."%'"); 
													while($rreshti = mysqli_fetch_array($sql)) { 		
															echo "<tr>";
															echo "<td>".$rreshti['Perdoruesi']."</td>";
															echo "<td>".$rreshti['Fjalekalimi']."</td>";
															echo "<td>".$rreshti['Email']."</td>";														
															}
														}
													?>											
									</table>
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