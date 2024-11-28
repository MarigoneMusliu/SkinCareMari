<header id="header">
									
<?php
    $rezultati = mysqli_query($lidhe, "SELECT * FROM wscm_tedhenat WHERE Pozicioni_faqes='fillimi_faqes_rrsociale'");
    while ($rreshti = mysqli_fetch_assoc($rezultati)) {

    extract($rreshti);
					  
if($rezultati==null)
mysqli_free_result($rezultati);
           ?>
			
			<div class="content">
				<header>
            		 <?php echo $Pershkrimi ?>
				</header> 
			</div>
			<?php } ?>
</header>
		
			<?php
            $rezultati = mysqli_query($lidhe, "SELECT * FROM wscm_tedhenat WHERE Pozicioni_faqes='fillimi_faqes'");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

            extract($rreshti);
			  	  
if($rezultati==null)
  mysqli_free_result($rezultati);

             ?>			
			 <br>					
<section id="banner" style="text-align: center; padding: 0; margin: 0;">
  <img 
    src="<?php echo $Dosja ?>" 
    alt="Banner Image" 
    style="
      display: block; 
      width: 100%; /* Image takes up the full width of its container */
      height: auto; /* Maintains aspect ratio */
      max-height: 100vh; /* Ensures the image doesn't exceed the viewport height */
      margin: 0 auto; /* Centers the image horizontally if container has extra width */
    " 
  />
</section>



		<?php } ?>