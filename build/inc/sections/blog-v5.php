<?php
	$title = array(
		'The rise of AI and Robotics in retail customer experiences ',
		"The rise of AI and Robotics in retail customer experiences.",
		'The rise of AI and Robotics in retail customer experiences',
	);
	$img = array(
		'assets/img/blog/blog_5_1.jpg',
		'assets/img/blog/blog_5_2.jpg',
		'assets/img/blog/blog_5_3.jpg',
	);
	$date = array(
		'Jan 24',
		'Jul 16',
		'Jun 30',
	);
	$arrlength = count($title);

	for($x = 0; $x < $arrlength; $x++) {
	?>
		<div class="<?php echo $klass;?>">
			<div class="blog-card style5">
				<div class="blog-img" data-mask-src="assets/img/shape/blog-card5-shape.png">
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
					<a href="blog-details.html" class="link-btn style4">Read More <i class="fas fa-long-arrow-right ms-2"></i></a>
				</div>
			</div>
		</div>
		
	<?php if($x == $y) {
        break;
    } }; 
?>