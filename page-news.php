<?php get_header(); ?>

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

<!-- <Blog Area> -->
<section class="blog_area section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog_left_sidebar">

                    <?php 
                        $posts = wp_get_recent_posts();

                        foreach($posts as $p){
                            if ($p['ID'] != 1){ ?>
                            <article class="row blog_item">
                                <div class="col-md-3">
                                    <div class="blog_info">
                                        <ul class="blog_meta list">
                                            <li><a href="<?php echo get_permalink($p['ID']); ?>"><?php echo get_the_date('d F Y', $p['ID']); ?><i class="far fa-calendar"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <div class="blog_details">
                                            <a href="<?php echo get_permalink($p['ID']) ?>"><h4><?php echo $p['post_title']; ?></h4></a>
                                            <p class="blog-description"><?php echo $p['post_excerpt']; ?></p>
                                            <a href="<?php echo get_permalink($p['ID']); ?>" class="template-btn">Посмотреть</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- </Blog Area> -->

<?php get_footer(); ?>