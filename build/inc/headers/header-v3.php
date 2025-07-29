<?php 
get_section('sidemenu-v2');
?>
<?php 
get_header('popup-search');
?>
<?php 
get_header('mobile-menu');
?>
<?php 
get_header('color-scheme');
?>
<!--==============================
	Header Area
==============================-->
<header class="th-header header-layout3">
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
          <div class="container">
            <div class="menu-area">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="<?php echo indexURL;?>">
                                <img src="assets/img/logo3.svg" alt="<?php echo themeName;?>">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <?php get_header('menu'); ?>
                        </nav>
                        <div class="header-button d-flex d-lg-none">
                            <button type="button" class="th-menu-toggle icon-btn"><i class="far fa-bars"></i></button>
                        </div>
                    </div>
                    <div class="col-auto d-xl-block d-none">
                        <div class="header-button">
                            <button type="button" class="icon-btn style-border searchBoxToggler"><i class="far fa-search"></i></button>
                            <a href="contact.html" class="th-btn style-gradient4">Get In Touch <i class="far fa-long-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


