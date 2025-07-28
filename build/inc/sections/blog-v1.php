<?php
	$title = array(
		'The rise of AI and Robotics in retail customer experiences ',
		"How AI is Transforming Businesses Across Industries",
		'Understanding Deep Learning and Neural Networks in AI',
		'The Role of AI in Shaping the Future of Work',
		'How Small Businesses Can Benefit from AI Solutions',
		'Top AI Tools and Platforms for Businesses in 2025',
		'AI and Creativity: Can Machines Be Truly Creative',
		'Ethical AI: Building Responsible and Fair AI Systems',
		'AI-Powered Innovations: What’s Next for the Future?',
	);
	$img = array(
		'assets/img/blog/blog_1_1.jpg',
		'assets/img/blog/blog_1_2.jpg',
		'assets/img/blog/blog_1_3.jpg',
		'assets/img/blog/blog_1_4.jpg',
		'assets/img/blog/blog_1_5.jpg',
		'assets/img/blog/blog_1_6.jpg',
		'assets/img/blog/blog_1_7.jpg',
		'assets/img/blog/blog_1_8.jpg',
		'assets/img/blog/blog_1_9.jpg',
	);
	$date = array(
		'24 Jan',
		'16 Jul',
		'30 Jun',
		'16 Jul',
		'24 Jan',
		'16 Jul',
		'30 Jun',
		'16 Jul',
		'24 Jan',
	);
	$arrlength = count($title);

	for($x = 0; $x < $arrlength; $x++) {
	?>
		<div class="<?php echo $klass;?>" data-cue="slideInUp">
			<div class="blog-card">
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
					<a href="blog-details.html" class="link-btn style4">Read More <i class="fas fa-long-arrow-right ms-2"></i></a>
				</div>
			</div>
		</div>
		
	<?php if($x == $y) {
        break;
    } }; 
?>