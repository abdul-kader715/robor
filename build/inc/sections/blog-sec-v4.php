
<!--==============================
Blog Area  
==============================-->
<section class="overflow-hidden <?php echo $klass;?>" id="blog-sec">
    
    <div class="container">
        <div class="row justify-content-between align-items-center">
                <div class="col-xxl-6 col-xl-8">
                    <div class="title-area mb-50">
                        <h2 class="sec-title style2 text-anim2 text-white" data-cue="slideInUp">Our Latest News & Blog</h2>
                         <p class="sec-text style2" data-cue="slideInUp">An AI image generator is a powerful tool that uses artificial intelligence, particularly
                            machine learning and deep learning models,</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn" data-cue="slideInRight">
                        <a href="blog.html" class="th-btn style-gradient4">View All Post <i class="far fa-long-arrow-right ms-2"></i></a>
                    </div>
                </div>
        </div>
        <div class="row gy-40 justify-content-center">
            <?php get_section('blog-v4','col-xl-4 col-lg-6', '2');?>
        </div>
    </div>
</section>