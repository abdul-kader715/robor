<?php
	$title = array(
		'The rise of AI and Robotics in retail customer experiences',
		"The Impact of Robotics on Customer Experience AI and Robotics",
		'Enhancing Retail Customer Journeys with AI Technology',
	);
	$img = array(
		'assets/img/blog/blog_4_1.jpg',
		'assets/img/blog/blog_4_2.jpg',
		'assets/img/blog/blog_4_3.jpg',
	);
	$date = array(
		'Dec 12',
		'Jan 24',
		'Jun 12',
	);
	$arrlength = count($title);

	for($x = 0; $x < $arrlength; $x++) {
	?>
	<div class="<?php echo $klass;?> fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.4s"> 
		<div class="blog-card style4">
			<div class="blog-img">
				<a href="blog-details.html">
					<img src="<?php echo $img[$x];?>" alt="blog image">
				</a>
			</div>
			<div class="blog-content">
				<div class="blog-meta">
					<a href="blog.html"><i class="far fa-calendar"></i><?php echo $date[$x];?>, <?php echo date("Y"); ?></a>
					<a href="blog.html"><i class="far fa-user"></i>by admin</a>
				</div>
				<h3 class="box-title"><a href="blog-details.html"><?php echo $title[$x];?></a></h3>
				<a href="blog-details.html" class="link-btn style5">Read More <i class="fas fa-long-arrow-right ms-2"></i></a>
			</div>
		</div>
	</div>
	<?php if($x == $y) {
        break;
    } }; 
?>