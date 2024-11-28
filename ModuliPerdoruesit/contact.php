<?php
	include_once("konfigurim.php");	
?>
<DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>User Module</title>
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

					<section id="main" class="wrapper">
						<div class="inner">
						
						<div class="content">
							
								<div class="row">
									<div class="col-12 col-12-medium" style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; padding: 20px;">
  <form action="https://api.web3forms.com/submit" method="POST" class="contact-left" style="width: 48%; display: flex; flex-direction: column; gap: 15px; background-color: #f9f9f9; padding: 20px; border-radius: 15px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
    <div class="contact-left-title" style="text-align: center; margin-bottom: 15px;">
      <h2 style="margin: 0; font-size: 1.8em;">Get in touch</h2>
      <hr style="border: none; height: 2px; background-color: #ccc; width: 50%; margin: 10px auto;">
    </div>
    <input type="hidden" name="access_key" value="3a0b9d52-f03f-4dc2-b0c9-0103e4ba6dae">
    <input type="text" name="name" placeholder="Your Name" class="contact-inputs" required style="padding: 10px; font-size: 1em; border: 1px solid #ddd; border-radius: 5px; width: 100%;">
    <input type="text" name="surname" placeholder="Your Surname" class="contact-inputs" required style="padding: 10px; font-size: 1em; border: 1px solid #ddd; border-radius: 5px; width: 100%;">
    <input type="email" name="email" placeholder="Email" class="contact-inputs" required style="padding: 10px; font-size: 1em; border: 1px solid #ddd; border-radius: 5px; width: 100%;">
    <input type="tel" name="phone" placeholder="Your Phone Number" class="contact-inputs" required style="padding: 10px; font-size: 1em; border: 1px solid #ddd; border-radius: 5px; width: 100%;">
    <textarea name="message" placeholder="Your Message" class="contact-inputs" required style="padding: 10px; font-size: 1em; border: 1px solid #ddd; border-radius: 5px; width: 100%; height: 120px;"></textarea>
    <button 
  type="submit" 
  style="
    padding: 10px 20px; 
    font-size: 1em; 
    background-color: #a49c96; /* Milk color */
    color: #fff; /* Darker text for contrast */
    border: 2px solid #a49c96; /* Slightly darker border for depth */
    border-radius: 5px; 
    cursor: pointer; 
    display: flex; /* Flexbox to center the text */
    justify-content: center; /* Horizontal centering */
    align-items: center; /* Vertical centering */
    transition: background-color 0.3s, color 0.3s;
  "
>
  Submit
</button>


  </form>
  <div class="contact-right" style="width: 48%; text-align: center;">
    <img src="images/contactii.jpg" width="550px" height="650px" style= "border: 5px solid #5E5854; border-radius: 35px; max-width: 100%; height: auto;" />
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