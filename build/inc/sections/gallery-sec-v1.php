<!--==============================
Gallery Area  
==============================-->
<div class="overflow-hidden <?php echo $klass;?>" >
   
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-6 col-xl-6">
                <div class="title-area text-center">
                    <h2 class="sec-title fadeinup wow text-white" data-wow-duration="1.5s" 
                    data-wow-delay="0.3s">AI Image Gallery</h2>
                    <p class="border-color">AI image generators are reshaping content creation, design, marketing, entertainment,
                     and more by automating and accelerating the creative process.</p>
                </div>
            </div>
        </div>  
        <div class="filter-active">      
            <?php get_section('gallery-v1', 'filter-item');?>  
        </div>        
    </div>
</div>