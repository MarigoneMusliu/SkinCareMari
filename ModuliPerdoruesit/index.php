<!DOCTYPE HTML>
<?php include_once("konfigurim.php"); ?>

<html>
	<head>
		<title>SkinCareShop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<div id="wrapper">

			<div id="main">
				<div class="inner">

					<?php include_once("fillimi_faqes.php"); ?>

					<section>				
					<div class="posts">
						

					<?php
					$rezultati = mysqli_query($lidhe, "SELECT products.ProductName, products.Description, Brands.Brands, products.QuantityInStock, products.Pershkrimi, products.foto, products.emrifotos FROM products      
					LEFT OUTER JOIN Brands ON products.ID_Brands = Brands.ID_Brands
					GROUP BY products.ProductName, products.Description,  products.QuantityInStock, products.Pershkrimi, Brands.Brands, products.foto, products.emrifotos
					ORDER BY Brands.ID_Brands, products.ID_product DESC"); 

					while ($rreshti = mysqli_fetch_assoc($rezultati)) {

					extract($rreshti);
								
					if($rezultati==null)
					mysqli_free_result($rezultati);
							
					?>
				<article>
					<div class="image">
					<a href="#" class="image">
    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($rreshti['foto']).'" style="width: 80%; height: auto;">'; ?>
</a>
	</a>			
					</div>
							<h2><?php echo $ProductName; ?></h2>
						
							<p><b>Description: </b><?php echo $Description; ?> €</p>
							<p><b>Brands: </b><?php echo $Brands; ?></p>	
																
				</article>
				<?php } ?>                                                  
						
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