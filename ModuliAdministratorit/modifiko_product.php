<?php
	include("kontrollim.php");	
?>
<?php
	include_once("konfigurim.php");

if(isset($_POST['modifiko_oferta']))
{	
	$ID_product = $_POST['ID_product'];
	$ProductName=$_POST['ProductName'];
	$Description=$_POST['Description'];
	$Brands=$_POST['Brands'];
	$QuantityInStock=$_POST['QuantityInStock'];
	$Pershkrimi=$_POST['Pershkrimi'];

	$foto =addslashes (file_get_contents($_FILES['foto']['tmp_name']));
	$emrifotos = $_FILES['foto']['name'];
	
	$maxsize = 10000000; 

	if(empty($ProductName) || empty($Description) || empty($Brands) || empty($QuantityInStock) || empty($Pershkrimi) || empty($foto)) {
				
		if(empty($ProductName)) {
			echo "<font color='red'>ProductName është i zbrazët.</font><br/>";
		}
		
		if(empty($Description)) {
			echo "<font color='red'>Description është i zbrazët.</font><br/>";
		}
		if(empty($Brands)) {
			echo "<font color='red'>Brands është i zbrazët.</font><br/>";
		}
		
		if(empty($QuantityInStock)) {
			echo "<font color='red'>QuantityInStock është i zbrazët.</font><br/>";
		}
		if(empty($Pershkrimi)) {
			echo "<font color='red'>Përshkrimi është i zbrazët.</font><br/>";
		}
		if(empty($foto)) {
			echo "<font color='red'>Foto është e zbrazët.</font><br/>";
		}
	
	} else {	
		$rezultati = mysqli_query($lidhe,"UPDATE products SET ProductName='$ProductName', Description='$Description', Brands='$Brands',  QuantityInStock='$QuantityInStock', Pershkrimi='$Pershkrimi', foto='$foto', emrifotos='$emrifotos' WHERE ID_product=$ID_product");
		
		header("Location: menaxho_oferta.php");
	}
}
?>
<?php
$ID_product = $_GET['ID_product'];

$rezultati = mysqli_query($lidhe,"SELECT * FROM products WHERE ID_product=$ID_product");

while($res = mysqli_fetch_array($rezultati))
{
	$ProductName = $res['ProductName'];
	$Description = $res['Description'];
	$Brands = $res['Brands'];
	$QuantityInStock = $res['QuantityInStock'];
	$Pershkrimi = $res['Pershkrimi'];
}
?>


<!DOCTYPE HTML>
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
											<div class="table-wrapper">
												<form enctype="multipart/form-data"  action="modifiko_oferta.php" method="post" name="form1">
												<table width='100%' border=0>
														<h3>Modifiko të dhënat e ofertës</h3>
													<tr> 
														<td>ProductName</td>
														<td><input type="text" name="ProductName" value='<?php echo $ProductName;?>' required /></td>
													</tr>
													<tr> 
														<td>$Description</td>
														<td><input type="text" name="Description" value='<?php echo $Description;?>' required /></td>
													</tr>
													 	
													<tr>
														<select name="Brands">
															<option selected="selected">Select Brands</option>
															<?php
															$res=mysqli_query($lidhe,"SELECT * FROM Brands");
															while($rreshti=$res->fetch_array())
															{
															?>
															<option value="<?php echo $rreshti['Brands']; ?>"><?php echo $rreshti['Brands']; ?></option>
															<?php
															}
															?>
														</select><br />
													</tr>
													
													<tr> 
														<td>QuantityInStock</td>
														<td><input type="text" name="QuantityInStock" value='<?php echo $QuantityInStock;?>' required /></td>
													</tr>
													<tr> 
														<td>Pershkrimi</td>
														<td><input type="text" name="Pershkrimi" value='<?php echo $Pershkrimi;?>'  required /></td>
													</tr>		
													<tr>
														<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
														<td><input name="foto" type="file"  value='<?php echo $foto;?>'  required/></td>
													</tr>
													<tr>
														<td><input type="hidden" name="ID_product" value='<?php echo $_GET['ID_product'];?>' /></td>
														<td><input type="submit" name="modifiko_oferta" value="Modify"></td>
													</tr>
												</table>
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