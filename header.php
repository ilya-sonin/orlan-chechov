<!DOCTYPE html>
<html lang="ru">
    <head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS Files -->
    <?php wp_head() ?>
    
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->
    <!-- <Header area> -->
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 d-md-flex">
                        <h6 class="mr-3"><span class="mr-2"><i class="fas fa-mobile-alt"></i></span>Позвоните нам! +7 (496) 725-25-44</h6>
                        <h6 class="mr-3"><span class="mr-2"><i class="far fa-envelope"></i></span>orlan-chehov@yandex.ru</h6>
                    </div>
                    <div class="col-lg-3">
                        <div class="social-links">
                            <ul>
                                <li><a href="https://vk.com/club173597715"><i class="fab fa-vk"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="<?php bloginfo( 'url' ) ?>"><img src="<?php echo get_template_directory_uri()?>/assets/images/logo/logo.svg" alt="logo"/></a>
                    </div>
                    <?php wp_nav_menu([
                        'theme_location'  => 'basicMenu',
                        'container' => 'nav',
                        'container_class' => 'nav-menu-container',
                        'container_id' => 'nav-menu-container', 
                        'menu_class' => 'nav-menu',
                        'menu_id' => 'nav-menu',
                    ]); ?>
                </div>
            </div>
        </div>
    </header>
    <!-- </Header area> -->