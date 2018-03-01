<script src="<?php echo url_for('js/jquery.menu-aim.js'); ?>"> </script>
<script src="<?php echo url_for('js/main.js'); ?>"></script> <!-- Resource jQuery -->
<script src="<?php echo url_for('js/jquery-ui.js'); ?>"></script>
<script src="<?php echo url_for('js/bootstrap.js'); ?>"></script>
<script src="<?php echo url_for('js/owl.carousel.min.js'); ?>"></script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<script type="text/javascript" src="<?php echo url_for('js/move-top.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url_for('js/easing.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url_for('js/easyResponsiveTabs.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url_for('js/multi.process.js'); ?>"></script>
<script>
	$(function() {
		$( "#datepicker" ).datepicker();
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$().UItoTop({ easingType: 'easeOutQuart' });
	});
</script>
<!-- for smooth scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //for smooth scrolling -->

<!-- ====== owl carousel ====== -->
<script type="text/javascript">
	var owl = $('.owl-carousel');
	owl.owlCarousel({
		items:4,
		loop:true,
		margin:20,
		autoplay:true,
		autoplayTimeout:2000,
		autoplayHoverPause:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:3,
				nav:false
			},
			1000:{
				items:4,
				nav:true,
			}
		}
	});
	$('.play').on('click',function(){
		owl.trigger('play.owl.autoplay',[1000])
	})
	$('.stop').on('click',function(){
		owl.trigger('stop.owl.autoplay')
	})
</script>