<footer>
	<div class="footer-newsletter">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7">
					<form id="newsletter-validate-detail" method="post" action="index.html#">
						<h3 class="hidden-sm">Sign up for newsletter</h3>
						<div class="newsletter-inner">
							<input class="newsletter-email" name='Email' placeholder='Enter Your Email'/>
							<button class="button subscribe" type="submit" title="Subscribe">Subscribe</button>
						</div>
					</form>
				</div>
				<div class="social col-md-4 col-sm-5">
					<ul class="inline-mode">
						<li class="social-network fb"><a title="Connect us on Facebook" target="_blank" href="<?php echo $baseUrl;?>/https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
						<li class="social-network googleplus"><a title="Connect us on Google+" target="_blank" href="<?php echo $baseUrl;?>/https://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
						<li class="social-network tw"><a title="Connect us on Twitter" target="_blank" href="<?php echo $baseUrl;?>/https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
						<li class="social-network linkedin"><a title="Connect us on Linkedin" target="_blank" href="<?php echo $baseUrl;?>/https://www.pinterest.com/"><i class="fa fa-linkedin"></i></a></li>
						<li class="social-network rss"><a title="Connect us on Instagram" target="_blank" href="<?php echo $baseUrl;?>/https://instagram.com/"><i class="fa fa-rss"></i></a></li>
						<li class="social-network instagram"><a title="Connect us on Instagram" target="_blank" href="<?php echo $baseUrl;?>/https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-xs-12 col-lg-3">
				<div class="footer-logo"><a href="<?php echo $baseUrl;?>/index.html"><img src="<?php echo $baseUrl;?>/frontend/images/footer-logo.png" alt="fotter logo"></a> </div>
				<p>Lorem Ipsum is simply dummy text of the print and typesetting industry.</p>
				<div class="footer-content">
					<div class="email"> <i class="fa fa-envelope"></i>
						<p>Support@themes.com</p>
					</div>
					<div class="phone"> <i class="fa fa-phone"></i>
						<p>(800) 0123 456 789</p>
					</div>
					<div class="address"> <i class="fa fa-map-marker"></i>
						<p> My Company, 12/34 - West 21st Street, New York, USA</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
				<div class="footer-links">
					<h3 class="links-title">Information<a class="expander visible-xs" href="<?php echo $baseUrl;?>/index.html#TabBlock-1">+</a></h3>
					<div class="tabBlock" id="TabBlock-1">
						<ul class="list-links list-unstyled">
							<li><a href="<?php echo $baseUrl;?>/index.html#s">Delivery Information</a></li>
							<li><a href="<?php echo $baseUrl;?>/index.html#">Discount</a></li>
							<li><a href="<?php echo $baseUrl;?>/sitemap.html">Sitemap</a></li>
							<li><a href="<?php echo $baseUrl;?>/index.html#">Privacy Policy</a></li>
							<li><a href="<?php echo $baseUrl;?>/faq.html">FAQs</a></li>
							<li><a href="<?php echo $baseUrl;?>/index.html#">Terms &amp; Condition</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
				<div class="footer-links">
					<h3 class="links-title">Insider<a class="expander visible-xs" href="<?php echo $baseUrl;?>/index.html#TabBlock-3">+</a></h3>
					<div class="tabBlock" id="TabBlock-3">
						<ul class="list-links list-unstyled">
							<li> <a href="<?php echo $baseUrl;?>/sitemap.html"> Sites Map </a> </li>
							<li> <a href="<?php echo $baseUrl;?>/index.html#">News</a> </li>
							<li> <a href="<?php echo $baseUrl;?>/index.html#">Trends</a> </li>
							<li> <a href="<?php echo $baseUrl;?>/about_us.html">About Us</a> </li>
							<li> <a href="<?php echo $baseUrl;?>/contact_us.html">Contact Us</a> </li>
							<li> <a href="<?php echo $baseUrl;?>/index.html#">My Orders</a> </li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-2 col-xs-12 col-lg-3 collapsed-block">
				<div class="footer-links">
					<h3 class="links-title">Service<a class="expander visible-xs" href="<?php echo $baseUrl;?>/index.html#TabBlock-4">+</a></h3>
					<div class="tabBlock" id="TabBlock-4">
						<ul class="list-links list-unstyled">
							<li> <?php echo CHtml::link('My Account',array('site/login')); ?></li>
							<li> <a href="<?php echo $baseUrl;?>/wishlist.html">Wishlist</a> </li>
							<li> <a href="<?php echo $baseUrl;?>/shopping_cart.html">Shopping Cart</a> </li>
							<li> <a href="<?php echo $baseUrl;?>/index.html#">Return Policy</a> </li>
							<li> <a href="<?php echo $baseUrl;?>/index.html#">Special</a> </li>
							<li> <a href="<?php echo $baseUrl;?>/index.html#">Lookbook</a> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-coppyright">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-12 coppyright"> Copyright © 2016 <a href="<?php echo $baseUrl;?>/index.html#"> MyStore </a>. All Rights Reserved. </div>
				<div class="col-sm-6 col-xs-12">
					<div class="payment">
						<ul>
							<li><a href="<?php echo $baseUrl;?>/index.html#"><img title="Visa" alt="Visa" src="<?php echo $baseUrl;?>/frontend/images/visa.png"></a></li>
							<li><a href="<?php echo $baseUrl;?>/index.html#"><img title="Paypal" alt="Paypal" src="<?php echo $baseUrl;?>/frontend/images/paypal.png"></a></li>
							<li><a href="<?php echo $baseUrl;?>/index.html#"><img title="Discover" alt="Discover" src="<?php echo $baseUrl;?>/frontend/images/discover.png"></a></li>
							<li><a href="<?php echo $baseUrl;?>/index.html#"><img title="Master Card" alt="Master Card" src="<?php echo $baseUrl;?>/frontend/images/master-card.png"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<a href="<?php echo $baseUrl;?>/index.html#" class="totop"> </a> 
<!-- End Footer --> 

</div>