
<!--==============================
	Footer Area
==============================-->
<footer class="  <?php echo $klass;?>">
	<div class="shape-mockup footer-bg-shape1-1" data-left="50%" data-bottom="-50%">
		<img src="assets/img/shape/footer-bg-shape2.png" alt="img">
	</div>
	<div class="container">
		<div class="footer-bottom">
			<div class="widget-area">
				<div class="row justify-content-between">
					<div class="col-md-6 col-xl-auto" data-cue="slideInUp">	
						<?php get_widget('newsletter', 'footer-widget'); ?>
					</div>
					<div class="col-sm-6 col-xl-auto" data-cue="slideInUp">
						<?php get_widget('nav-menu', 'footer-widget'); ?>
					</div>
					<div class="col-sm-6 col-xl-auto" data-cue="slideInUp">
						<?php get_widget('nav-menu-v2', 'footer-widget'); ?>
					</div>
					<div class="col-sm-6 col-xl-auto" data-cue="slideInUp">
						<?php get_widget('nav-menu-v3', 'footer-widget'); ?>
					</div>
					<div class="col-md-6 col-xl-auto" data-cue="slideInUp">
						<?php get_widget('instagram-feeds', 'footer-widget'); ?>
					</div>
					
					
				</div>
			</div>
			
		</div>
	</div>
	<div class="copyright-wrap ">
		<div class="container">
			<div class="row gy-2">
				<div class="col-lg-6" data-cue="slideInUp">
					<p class="copyright-text">Copyright <?php echo date("Y"); ?> <a href="<?php echo indexURL;?>"><?php echo Author;?>.</a> All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-center text-lg-end" data-cue="slideInUp">
					<div class="footer-links">
						<ul>
							<li>
								<a href="about.html">Privacy Policy</a>
							</li>
							<li>
								<a href="contact.html">Contact</a>
							</li>
							<li>
								<a href="about.html">Terms and Conditions.</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>


<!--********************************
			Code End  Here 
	******************************** -->

	<!-- Scroll To Top -->
	<div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

	
<?php get_footer('script'); ?>


</body>

</html>