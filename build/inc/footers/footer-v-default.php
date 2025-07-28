
<!--==============================
	Footer Area
==============================-->
<footer class="footer-wrapper footer-default">
	<div class="footer-bg-shape bg-title" data-mask-src="assets/img/shape/footer-bg-shape1.png"></div>
	<div class="footer-bg-shape2 shape-mockup" data-bottom="-45%" data-right="-45%">
		<img src="assets/img/shape/footer-bg-shape2.png" alt="img">
	</div>
	<div class="footer-cta-wrap space" id="contact-sec">
		<div class="shadow-text">Robor</div>
		<div class="container">
			<div class="row gy-40 justify-content-between">
				<div class="col-lg-6">
					<div class="title-area mb-0">
						<span class="sub-title text-white before-none text-anim" data-cue="slideInLeft">Get Started</span>
						<h2 class="sec-title text-white text-anim2" data-cue="slideInLeft">Let's Make Something
						Great Together</h2>
						<div class="btn-wrap mt-40" data-cue="slideInLeft">
	                        <a href="contact.html" class="th-btn style2">Contact Us<i class="far fa-long-arrow-right ms-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer-cta-thumb" data-cue="slideInRight">
						<img src="assets/img/normal/footer-thumb1-1.png" alt="img">
					</div>
				</div>
			</div>	
		</div>
	</div>
	<div class="widget-area" data-bg-src="assets/img/bg/footer-default-bg.png">
		<div class="footer-widget-bg" data-bg-src="assets/img/bg/jiji-bg-shape.png"></div>
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-6 col-xl-auto" data-cue="slideInUp">
					<?php get_widget('about', 'footer-widget'); ?>
				</div>
				<div class="col-sm-6 col-xl-auto" data-cue="slideInUp">
					<?php get_widget('nav-menu', 'footer-widget'); ?>
				</div>
				<div class="col-sm-6 col-xl-auto" data-cue="slideInUp">
					<?php get_widget('nav-menu-v2', 'footer-widget'); ?>
				</div>
				<div class="col-md-6 col-xl-auto" data-cue="slideInUp">	
					<?php get_widget('nav-menu-v3', 'footer-widget'); ?>
				</div>
				<div class="col-md-6 col-xl-auto" data-cue="slideInUp">	
					<?php get_widget('download', 'footer-widget'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright-wrap">
		<div class="container">
			<div class="row justify-content-center gy-3 align-items-center">
				<div class="col-md-6" data-cue="slideInUp">
					<p class="copyright-text">
					<i class="fal fa-copyright"></i> Copyright <?php echo date("Y"); ?> <a href="<?php echo indexURL;?>"><?php echo Author;?></a>. All Rights Reserved. </p>
				</div>
				<div class="col-md-6 text-md-end text-center" data-cue="slideInUp">
					<div class="footer-links">
						<ul>
							<li><a href="about.html">Privacy Policy</a></li>
							<li><a href="about.html">Terms of services</a></li>
							<li><a href="about.html">Disclaimer</a></li>
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