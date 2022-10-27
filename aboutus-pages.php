<?php
/*
Template Name: AboutUsPages
*/
?>

<?php get_header();?>
    <!-- <Banner Area> -->
    <section class="second-banner other-page" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/second-banner.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><?php the_title(); ?></h1>
                    <a href="<?php bloginfo('url')?>">Главная</a> <span>|</span> <a><?php the_title(); ?></a>
                </div>
            </div>
        </div>
    </section>
    <!-- </Banner Area> -->

    <!-- <Content Area> -->
    <section class="feature-area section-padding">
        <div class="container">
        	<div class="row">
	        	<div class="col-lg-3">
	                <div class="right_sidebar">
	                    <?php get_sidebar("left"); ?>
	                </div>
	            </div>
		         <div class="col-lg-9">
		            <?php
		            the_content();
		            ?>
		         </div>
	         </div>
        </div>
    </section>
    <!-- </Content> -->
    
    <!-- <Hotline Area> -->
    <section class="hotline-area text-center section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Остались вопросы?</h2>
                    <span>+7 (931) 44-44-200</span>
                    <p class="pt-3">Мы предоставляем поддержку. <br /> Не стесняйтесь задавать нам вопросы!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- </Hotline Area> -->
<?php get_footer(); ?>