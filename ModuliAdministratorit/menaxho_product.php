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
								
							<p style="text-align: right;">Hi, <em><?php echo $login_user;?>!</em></p> 

							<section>
								<div class="content">
									
										<div class="row">
											<div class="col-12 col-12-medium">
												
												<h3>Shto Oferta</h3>

													<div class="table-wrapper">
														<form enctype="multipart/form-data"  action="shto_oferta.php" method="post" name="form1">
															<table>																	
																<tr> 
																	<td>ProductName</td>
																	<td><input type="text" name="ProductName"></td>
																</tr>
																<tr> 
																	<td>Description</td>
																	<td><input type="text" name="Description"></td>
																</tr>
																<tr>
																	<select name="ID_Brands>
																		<option selected="selected">Zgjedh Brands</option>
																			<?php
																			$res=mysqli_query($lidhe,"SELECT * FROM wscm_Brands");
																			while($rreshti=$res->fetch_array())
																			{
																				?>
																				<option value="<?php echo $rreshti['ID_Brands']; ?>"><?php echo $rreshti['Brands']; ?></option>
																				<?php
																			}
																			?>
																	</select><br/>
																<tr>
																</tr>
																
																<tr> 
																	<td>QuantityInStock</td>
																	<td><input type="time" name="QuantityInStock"></td>
																</tr>
																<tr> 
																	<td>Pershkrimi</td>
																	<td><input type="text" name="Pershkrimi"></td>
																</tr>
																<tr>                                       
																	<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
																	<td><input name="foto" type="file" /></td>
																</tr>																
																<tr> 
																	<td></td>
																	<td><input type="submit" name="shto_oferta" value="Shto"></td>
																</tr>                                                               																					
															</table>
														</form>
													</div>
								
																		
										<div class="row">
											<div class="col-12 col-12-medium">
												<form action="" method="post">  
													<table>
														<tr>
															<h3>Kërko Ofertën për modifikim ose fshirje </h3>
														</tr>
														<tr>
															<td>
															Shkruaj:
															</td>
															<td>
															<input type="text" name="term" placeholder="ProductName ose pershkrimi"/>
															</td>
															<td> <input type="submit" value="Kërko" /></td>
														</tr>
														<table>
															<tr>
																<td>ProductName</td>
																<td>Description</td>
																<td>Brands</td>
																<td>QuantityInStock</td>
																<td>Përshkrimi</td>
																<td>Foto</td>
																<td>Emri fotos</td>
																	
																<td>Modify</td>
																<td>Delte</td>
															</tr> 

														<?php
															if (!empty($_REQUEST['term'])) {

															$term = mysqli_real_escape_string($lidhe,$_REQUEST['term']);     

															$sql = mysqli_query($lidhe,	
														"SELECT
														s.ID_product,
														s.ProductName,
														s.Description,
														f.Brands,
														s.QuantityInStock,
														s.Pershkrimi,
														s.foto,
														s.emrifotos
														

														FROM
														products s
														INNER JOIN
														wscm_Brands f ON s.ID_Brands = f.ID_Brands
														WHERE
														s.ProductName LIKE '%".$term."%' OR s.Pershkrimi LIKE '%".$term."%'"
															); 

															while($rreshti = mysqli_fetch_array($sql)) { 		
																	echo "<tr>";
																	echo "<td>".$rreshti['ProductName']."</td>";
																	echo "<td>".$rreshti['Description']."</td>";
																	echo "<td>".$rreshti['Brands']."</td>";
																	echo "<td>".$rreshti['QuantityInStock']."</td>";
																	echo "<td>".$rreshti['Pershkrimi']."</td>";
																echo "<td><img src=data:foto/jpeg;base64,".base64_encode($rreshti['foto'])." width='80'  height='100'/></td>";
																	echo "<td>".$rreshti['emrifotos']."</td>";	
																	
												
																	echo "<td><a href=\"modifiko_oferta.php?ID_product=$rreshti[ID_product]\" class='button' class='button primary'>Modifiko</a> </td>";	
																	echo "<td><a href=\"fshije_oferta.php?ID_product=$rreshti[ID_product]\" onClick=\"return confirm('Are you sure you want to delete the Product?')\" class='button' class='button primary'>Delete</a></a> </td>";			
											
																}

															}

															?>
													</table>
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