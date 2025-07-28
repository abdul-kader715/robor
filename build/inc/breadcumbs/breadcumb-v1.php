<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper <?php echo $klass; ?>" data-bg-src="<?php echo $breadcumb_image; ?>" <?php echo $breadcumb_attr;?> data-overlay="black" data-opacity="7">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title text-anim" data-cue="slideInUp" data-delay="100"><?php echo $breadcumb_title;?></h1>
                    <ul class="breadcumb-menu" data-cue="slideInUp" data-delay="300">
                        <li><a href="<?php echo indexURL;?>">Home</a></li>
                        <li><?php echo $breadcumb_subtitle;?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>