	<div class="copyright-wthree">
				<p>&copy; <?php echo date("Y")  ?> eLibrary . All Rights Reserved | Design by LAZPET using <a href="http://w3layouts.com/"> W3layouts </a></p>
			</div>
<!-- //Footer -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

	
<script type="text/javascript" src="<?php echo BASE_URL . 'js/jquery-2.1.4.min.js' ?>"></script>

						
<!--gallery-->

					<script type="text/javascript" src="<?php echo BASE_URL . 'js/jquery.flexisel.js'?>"></script>
<!--gallery-->



 <!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo BASE_URL . 'js/move-top.js'?>"></script>
<script type="text/javascript" src="<?php echo BASE_URL . 'js/easing.js' ?>"></script>
<!--js for bootstrap working-->
	<script src="<?php echo BASE_URL . 'js/bootstrap.js' ?>"></script>
<!-- //for bootstrap working -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->



<!-- script-for-menu -->
					<script>					
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle("slow" , function(){
							});
						});
					</script>
					<!-- script-for-menu -->
