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

<!-- <Reviews Area> -->
<section class="students-area section-padding-both" id="reviews">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-top text-center">
                    <h2>Что говорят о нас</h2>
                    <p>Оставить свой отзыв вы можете в <a href="#feedback-form1">конце</a> этой страницы!</p>
                </div>
            </div>
        </div>
        <div class="row section-padding-bottom">

            <?php $comments = get_comments([
                        'status'  => 'approve',
                        'post_ID' => 1]); 
            
                foreach( $comments as $comment ){?>

                <div class="col-md-6">
                    <div class="single-student text-center">
                        <h3><?php echo $comment->comment_author; ?></h3>
                        <h4>Возраст: <?php 
                                $age = get_comment_meta( $comment->comment_ID, 'age', true );
                                echo esc_attr( $age );
                        ?></h4>
                        <p class="pt-3"><?php echo $comment->comment_content; ?></p>
                    </div>
                </div>
                        
            <?php
            } ?>

        </div>          
    </div>
</section>
<!-- </Reviews Area> -->

<!-- <Connection area> -->
<section class="students-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-top text-center">
                    <h2>Обратная связь</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3 align-self-center">
                <?php comment_form( $args = array(
                    'fields' => array(
                        'author' => '<div class="form-group"><input id="author" name="author" type="text" placeholder="Ваше имя" required></div>',
                        'age' => '<div class="form-group"><input name="age" type="number" placeholder="Ваш возраст" required></div>',
                        'cookies' => ''
                    ),
                    'class_container' => 'appointment-form text-center mt-5 mt-lg-0',
                    'id_form' => 'feedback-form1',                 
                    'title_reply' => 'Оставить отзыв',
                    'title_reply_before' => '<h3 class="mb-5">',
                    'logged_in_as' => null,
                    'comment_notes_before' => null,
                    'class_form' => 'feedback-form1',
                    'submit_button' => '<button class="template-btn">Отправить</button>',
                    'comment_field' => '<div class="form-group"><textarea id="comment" name="comment" cols="20" rows="7"  placeholder="Ваш отзыв" required></textarea></div>',
                ), $post_id = 1 ); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>