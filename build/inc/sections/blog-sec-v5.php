
<!--==============================
Blog Area  
==============================-->
<section class="overflow-hidden <?php echo $klass;?>" id="blog-sec"
 data-bg-src="assets/img/bg/blog-bg-5-1.png">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-8 col-lg-8">
                <div class="title-area">
                    <span class="sub-title style2 before-none text-anim" data-cue="slideInLeft">News</span>
                    <h2 class="sec-title text-anim text-uppercase" data-cue="slideInLeft">Our Latest News & Blog</h2>
                </div>
            </div>
            <div class="col-auto align-self-end">
                <div class="sec-btn" data-cue="slideInRight">
                    <a href="blog.html" class="th-btn style-border3">View All Post <i class="far fa-long-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
       <div class="row gy-40 justify-content-center">
            <?php get_section('blog-v5', 'col-xl-4 col-lg-6', '2');?>
        </div>
    </div>
</section>