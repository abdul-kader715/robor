<?php
	$title = array(
		'The rise of AI and Robotics in retail customer experiences ',
		"How AI is Transforming Businesses Across Industries",
		'Understanding Deep Learning and Neural Networks in AI',
	);
	$img = array(
		'assets/img/blog/blog_2_1.jpg',
		'assets/img/blog/blog_2_2.jpg',
		'assets/img/blog/blog_2_3.jpg',
	);
	$date = array(
		'24 Jan',
		'16 Jul',
		'30 Jun',
	);
	$arrlength = count($title);

	for($x = 0; $x < $arrlength; $x++) {
	?>
		<div class="<?php echo $klass;?>" data-cue="slideInUp">
			<div class="blog-card style2">
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
					<a href="blog-details.html" class="th-btn style-border3">Read More <i class="far fa-long-arrow-right ms-2"></i></a>
				</div>
			</div>
		</div>
		
	<?php if($x == $y) {
        break;
    } }; 
?>