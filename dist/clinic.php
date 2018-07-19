<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Clinic</title>
</head>
<body>
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/svg-sprite.php');?>
    
    <section class="top">
        <div class="page-heading-wrap">
            <h1 class="page-heading">КОСМЕТОЛОГИЧЕСКАЯ КЛИНИКА</h1>
            <div class="page-heading__stick"></div>
        </div>
        <div class="page-slider-wrap salon-slider-wrap">
            <ul class="page-slider">
                <li class="page-slider__item">
                    <img src="img/clinic/slider/slide-1.jpg" alt="image" class="page-slider__image">
                </li>
                <li class="page-slider__item">
                    <img src="img/clinic/slider/slide-1.jpg" alt="image" class="page-slider__image">
                </li>
                <li class="page-slider__item">
                    <img src="img/clinic/slider/slide-1.jpg" alt="image" class="page-slider__image">
                </li>
            </ul>
            <button class="page-slider__button page-slider__button_prev">
                <span class="page-slider__button-text">Prev</span>
                <svg class="page-slider__button-icon long-arrow_revers"><use xlink:href="#long-arrow"></use></svg>
            </button>
            <button class="page-slider__button page-slider__button_next">
                <span class="page-slider__button-text">Next</span>
                <svg class="page-slider__button-icon"><use xlink:href="#long-arrow"></use></svg>
            </button>
        </div>
    </section>

    <div class="container">
        <div class="page-block-1 page-block-1_right animation-wrapper-js">
            <h2 class="page-block-1__heading animated-block-js slide-right">КОСМЕТОЛОГИЯ ЛИЦА</h2>
            <div class="page-block-1-content">
                <div class="page-block-1-content__info">
                    <ul class="page-block-1-list">
                        <li class="page-block-1-list__item page-block-1-list__item_1 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle"> Инъекционные процедуры</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_2 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Пилинги</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_3 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle"> Озонотерапия для лица</span>
                        </li>
                    </ul>
                    <div class="page-block-1__button-wrap animated-block-js fade">
                        <a href="#" class="button_black page-block-1__button">
                            Записаться on-line
                        </a>
                        <a href="#cosmetology-specialist" class="button_black page-block-1__button
                        page-block-1__button_black js-cosmetology-specialist__button">
                            Наши специалисты
                        </a>
                        <div class="page-block-1__button-line"></div>
                    </div>
                </div>
                <img src="img/clinic/img_1.jpg" alt="image" class="page-block-1-content__image animated-block-js slide-right">
            </div>
        </div>

        <div class="page-block-1 animation-wrapper-js">
            <h2 class="page-block-1__heading page-block-1__heading_right animated-block-js slide-left">АППАРАТНАЯ КОСМЕТОЛОГИЯ</h2>
            <div class="page-block-1-content page-block-1-content_left">
                <img src="img/clinic/img_2.jpg" alt="image" class="page-block-1-content__image page-block-1-content__image_left animated-block-js slide-left">
                <div class="page-block-1-content__info">
                    <ul class="page-block-1-list">
                        <li class="page-block-1-list__item page-block-1-list__item_1 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle"> Технология HYDRA FACIAL</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_2 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">RADIO LIFTING</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_3 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle"> OXYjet LEO de luxe</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_4 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">Микротоковая терапия</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_5 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">LPG-эндермолифтинг</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_6 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">Прессотерапия AIR PRESS</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_7 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">Лазерная эпиляция лица и тела</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_8 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">SMAS-лифтинг лица и тела Альтера</span>
                        </li>
                    </ul>
                    <div class="page-block-1__button-wrap animated-block-js fade">
                        <a href="#" class="button_black page-block-1__button">
                            Записаться on-line
                        </a>
                        <a href="#cosmetology-specialist" class="button_black page-block-1__button
                        page-block-1__button_black js-cosmetology-specialist__button">
                            Наши специалисты
                        </a>
                        <div class="page-block-1__button-line"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-block-1 page-block-1_right animation-wrapper-js">
            <h2 class="page-block-1__heading animated-block-js slide-right">КОСМЕТОЛОГИЯ ТЕЛА</h2>
            <div class="page-block-1-content">
                <div class="page-block-1-content__info">
                    <ul class="page-block-1-list">
                        <li class="page-block-1-list__item page-block-1-list__item_1 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle"> Инъекционные процедуры</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_2 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Удаление новообраваний</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_3 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle"> Пилинги</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_4 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Озонотерапия для тела</span>
                        </li>
                    </ul>
                    <div class="page-block-1__button-wrap animated-block-js fade">
                        <a href="#" class="button_black page-block-1__button">
                            Записаться on-line
                        </a>
                        <a href="#cosmetology-specialist" class="button_black page-block-1__button
                        page-block-1__button_black js-cosmetology-specialist__button">
                            Наши специалисты
                        </a>
                        <div class="page-block-1__button-line"></div>
                    </div>
                </div>
                <img src="img/clinic/img_3.jpg" alt="image" class="page-block-1-content__image animated-block-js slide-right">
            </div>
        </div>

        <div class="people line-bottom line-bottom_custom">
            <h2 class="people__heading">НАШИ СПЕЦИАЛИСТЫ</h2>
            <div id="hair" class="people-section cosmetology-specialist animation-wrapper-js">
                <h3 class="people-section__heading">КОСМЕТОЛОГИЯ ЛИЦА И ТЕЛА</h3>
                <ul class="people-section-list">
                    <li class="people-section-list__item">
                        <div class="people-section-list-image">
                            <img src="img/salon/people/people_1.jpg" alt="photo" class="people-section-list__image animated-block-js flip">
                            <a href="#" class="people-section-list__button">
                                Записаться
                            </a>
                        </div>
                        <p class="people-section-list__name">Максимович Мила</p>
                        <p class="people-section-list__position">арт директор, стилист парикмахер</p>
                    </li>
                    <li class="people-section-list__item">
                        <div class="people-section-list-image">
                            <img src="img/salon/people/people_2.jpg" alt="photo" class="people-section-list__image animated-block-js flip">
                            <a href="#" class="people-section-list__button">
                                Записаться
                            </a>
                        </div>
                        <p class="people-section-list__name">Максимович Мила</p>
                        <p class="people-section-list__position">арт директор, стилист парикмахер</p>
                    </li>
                    <li class="people-section-list__item">
                        <div class="people-section-list-image">
                            <img src="img/salon/people/people_3.jpg" alt="photo" class="people-section-list__image animated-block-js flip">
                            <a href="#" class="people-section-list__button">
                                Записаться
                            </a>
                        </div>
                        <p class="people-section-list__name">Максимович Мила</p>
                        <p class="people-section-list__position">арт директор, стилист парикмахер</p>
                    </li>
                    <li class="people-section-list__item">
                        <div class="people-section-list-image">
                            <img src="img/salon/people/people_3.jpg" alt="photo" class="people-section-list__image animated-block-js flip">
                            <a href="#" class="people-section-list__button">
                                Записаться
                            </a>
                        </div>
                        <p class="people-section-list__name">Максимович Мила</p>
                        <p class="people-section-list__position">арт директор, стилист парикмахер</p>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <?php include_once('includes/footer.php');?> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/common.min.js"></script>
<script src="js/clinic.min.js"></script>
</body>
</html>