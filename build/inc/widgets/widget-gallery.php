<div class="widget <?php echo $klass; ?>">
    <h3 class="widget_title">Gallery Photos</h3>
    <div class="sidebar-gallery">
		<?php
			$img = array(
				'assets/img/widget/gallery_1_1.jpg',
				'assets/img/widget/gallery_1_2.jpg',
				'assets/img/widget/gallery_1_3.jpg',
				'assets/img/widget/gallery_1_4.jpg',
			);
			$arrlength = count($img);

			for($x = 0; $x < $arrlength; $x++) {
			?>
				<div class="gallery-thumb">
					<img src="<?php echo $img[$x];?>" alt="Gallery Image">
					<a href="<?php echo $img[$x];?>" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
				</div>
			<?php }; 
		?>
    </div>
</div>