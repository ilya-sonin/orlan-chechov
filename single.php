<?php get_header(); ?>

<!-- <Banner Area> -->
<section class="second-banner other-page" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/second-banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><?php the_title(); ?></h1>
                <a href="/">Главная</a> <span>|</span> <a href="/news/">Новости</a> <span>|</span> <a href=""><?php the_title(); ?></a>
            </div>
        </div>
    </div>
</section>
<!-- </Banner Area> -->

<!-- Blog Area -->
<section class="blog_area section-padding">
    <div class="container">
     	<?php the_content(); ?>
    </div>
</section>
<!-- </Blog Area> -->


<?php get_footer(); ?>