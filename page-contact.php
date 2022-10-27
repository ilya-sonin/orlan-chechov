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

    <section class="map-area section-padding">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-12">
	            	<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A6a0031f75494a898361c0e61574df97e9703fc4fb8ff17224c24fb3564d0a731&amp;source=constructor" width="100%" height="720" frameborder="0"></iframe>
	            </div>
	        </div>
	    </div>
	</section>
    
    <!-- <Contact Area> -->
    <section class="contact-form section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="info-text">
                            <p>
								Московская область, г. Чехов, ул. Чехова, д 2. с. 1. ТД Дарина 3 этаж, офис № 5<br>
								
								График работы автошколы:<br>
								
								Вторник - Суббота<br>
								
								с 10:00 до 18:00.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="info-text">
                            <p>+7 (931) 444-42-00<br>+7 (496) 725-25-44</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="info-text">
                            <p>orlan-chehov@yandex.ru</p>
                            <p>Наша почта работает для вас!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <?php echo do_shortcode('[contact-form-7 id="284" title="Форма на странице контакты"]'); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- </Contact Area> -->
    
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