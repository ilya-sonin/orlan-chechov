<?php get_header(); ?>

<!-- <Banner area> -->
<section class="second-banner other-page" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/second-banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><?php the_title(); ?></h1>
                <a href="<?php bloginfo('url')?>">Главная</a> <span>|</span> <span>|</span> <a href=""><?php the_title(); ?></a>
            </div>
        </div>
    </div>
</section>
<!-- </Banner area> -->

<!-- <General area> -->
<section class="welcome-area section-padding" id="general-information">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="right_sidebar">
                    <?php get_sidebar("left"); ?>
                </div>
            </div>      
            <div class="col-lg-8">
                <div class="welcome-text-row mt-5 mt-lg-0">
                    <h2>Основные сведения</h2>
                    <h3>Дата создания образовательной организации</h3>
                    <p>18.10.2019 г.</p>
                    <h3>Учредитель автошколы</h3>
                    <p>Глухов Сергей Игоревич</p>
                    <h3>Местонахождение образовательной организации</h3>
                    <p>142300, Московская область, г. Чехов, ул. Чехова, д 2. с. 1. ТД Дарина 3 этаж, офис № 5</p>
                    <h3>График вождения</h3>
                    <p>Теоретические учебные занятия проводятся во вторник (с 18.00 до 20.00), в четверг (с 18.00 до 20.00) и в субботу (с 10.00 до 12.00)</p>
                    <h3>График работы</h3>
                    <p>с 10:00 до 18:00 (Вторник - Суббота)</p>
                    <h3>Контактный телефон</h3>
                    <p>+7 (931) 444-42-00<br>+7 (496) 725-25-44</p>
                    <h3>Электронный адрес</h3>
                    <p>orlan-chehov@yandex.ru</p>
                </div>  
            </div>
        </div>
    </div>
</section>
<!-- </General area> -->

<?php get_footer(); ?>