	<!-- JS --> 

	<!-- jquery js --> 
	<script type="text/javascript" src="<?php echo $baseUrl;?>/frontend/js/jquery.min.js"></script> 

	<!-- bootstrap js --> 
	<script type="text/javascript" src="<?php echo $baseUrl;?>/frontend/js/bootstrap.min.js"></script> 


	<!-- owl.carousel.min js --> 
	<script type="text/javascript" src="<?php echo $baseUrl;?>/frontend/js/owl.carousel.min.js"></script> 

	<!-- bxslider js --> 
	<script type="text/javascript" src="<?php echo $baseUrl;?>/frontend/js/jquery.bxslider.js"></script> 

	<!-- Slider Js --> 
	<script type="text/javascript" src="<?php echo $baseUrl;?>/frontend/js/revolution-slider.js"></script> 

	<!-- megamenu js --> 
	<script type="text/javascript" src="<?php echo $baseUrl;?>/frontend/js/megamenu.js"></script> 
	<script type="text/javascript">
		/* <![CDATA[ */   
		var mega_menu = '0';
		
		/* ]]> */
	</script> 

	<!-- jquery.mobile-menu js --> 
	<script type="text/javascript" src="<?php echo $baseUrl;?>/frontend/js/mobile-menu.js"></script> 

	<!--jquery-ui.min js --> 
	<script type="text/javascript" src="<?php echo $baseUrl;?>/frontend/js/jquery-ui.js"></script> 

	<!-- main js --> 
	<script type="text/javascript" src="<?php echo $baseUrl;?>/frontend/js/main.js"></script> 

	<!-- countdown js --> 
	<script type="text/javascript" src="<?php echo $baseUrl;?>/frontend/js/countdown.js"></script> 

	<!-- Revolution Slider --> 
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('.tp-banner').revolution(
			{
				delay:9000,
				startwidth:1170,
				startheight:530,
				hideThumbs:10,

				navigationType:"bullet",							
				navigationStyle:"preview1",

				hideArrowsOnMobile:"on",
				
				touchenabled:"on",
				onHoverStop:"on",
				spinner:"spinner4"
			});
		});
	</script> 

	<!-- Hot Deals Timer 1--> 
	<script type="text/javascript">
		var dthen1 = new Date("12/25/16 11:59:00 PM");
		start = "08/04/15 03:02:11 AM";
		start_date = Date.parse(start);
		var dnow1 = new Date(start_date);
		if(CountStepper>0)
			ddiff= new Date((dnow1)-(dthen1));
		else
			ddiff = new Date((dthen1)-(dnow1));
		gsecs1 = Math.floor(ddiff.valueOf()/1000);
		
		var iid1 = "countbox_1";
		CountBack_slider(gsecs1,"countbox_1", 1);
	</script>

	
</body>
</html>
