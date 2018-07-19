<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>SPA</title>
</head>
<body>
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/svg-sprite.php');?>
    
    <section class="top">
        <div class="page-heading-wrap">
            <h1 class="page-heading">ЭСТЕТИК СТУДИЯ И SPA-САЛОН</h1>
            <div class="page-heading__stick"></div>
        </div>
        <div class="page-slider-wrap salon-slider-wrap">
            <ul class="page-slider">
                <li class="page-slider__item">
                    <img src="img/spa/slider/slide-1.jpg" alt="image" class="page-slider__image">
                </li>
                <li class="page-slider__item">
                    <img src="img/spa/slider/slide-1.jpg" alt="image" class="page-slider__image">
                </li>
                <li class="page-slider__item">
                    <img src="img/spa/slider/slide-1.jpg" alt="image" class="page-slider__image">
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
                    <ul class="page-block-1-list page-block-1-list_botom_arrow">
                        <li class="page-block-1-list__item page-block-1-list__item_1 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle"> Anti-age THALGO</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_2 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Питание и увлажнение THALGO</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_3 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle"> Очищение THALGO</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_4 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Anti-age FORLLE’P</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_5 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Уход вокруг глаз THALGO</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_6 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Уход за лицом FORLLE’P</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_7 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Уход для мужчин</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_8 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Уход ERICSON</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_9 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">HYDRA CLINIC от ERICSON LABORATOIRE</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_10 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Anti-age ERICSON LABORATOIRE</span>
                        </li>
                        <li class="page-block-1-list__item">
                            <span class="page-block-1-list__text triangle">Anti-age ERICSON LABORATOIRE</span>
                        </li>
                    </ul>
                    <div class="list__more animated-block-js fade">
                            <svg><use xlink:href="#down-arrow"></use></svg>
                    </div>
                    <div class="page-block-1__button-wrap animated-block-js fade">
                        <a href="#" class="button_black page-block-1__button">
                            Записаться on-line
                        </a>
                        <a href="#cosmetology" class="button_black page-block-1__button
                        page-block-1__button_black js-cosmetology-specialist__button">
                            Наши специалисты
                        </a>
                        <div class="page-block-1__button-line"></div>
                    </div>
                </div>
                <img src="img/spa/img_1.jpg" alt="image" class="page-block-1-content__image animated-block-js slide-right">
            </div>
        </div>

        <div class="page-block-1 animation-wrapper-js">
            <h2 class="page-block-1__heading page-block-1__heading_right animated-block-js slide-left">МАССАЖ</h2>
            <div class="page-block-1-content page-block-1-content_left">
                <img src="img/spa/img_2.jpg" alt="image" class="page-block-1-content__image page-block-1-content__image_left animated-block-js slide-left">
                <div class="page-block-1-content__info">
                    <ul class="page-block-1-list">
                        <li class="page-block-1-list__item page-block-1-list__item_1 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle"> Тибетский массаж КУ-НЬЕ</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_2 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">Классический массаж тела</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_3 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle"> “Дышаший цветок” Краниосакральная терапия</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_4 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">Общий Антицеллюлитный массаж</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_5 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle"> Медовый массаж</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_6 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">Массаж лица THALGO</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_7 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle"> Метаболический массаж</span>
                        </li>
                    </ul>
                    <div class="page-block-1__button-wrap animated-block-js fade">
                        <a href="#" class="button_black page-block-1__button">
                            Записаться on-line
                        </a>
                        <a href="#massage" class="button_black page-block-1__button
                        page-block-1__button_black js-massage-specialist__button">
                            Наши специалисты
                        </a>
                        <div class="page-block-1__button-line"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-block-1 page-block-1_right animation-wrapper-js">
            <h2 class="page-block-1__heading animated-block-js slide-right">АППАРАТНАЯ КОСМЕТОЛОГИЯ</h2>
            <div class="page-block-1-content">
                <div class="page-block-1-content__info">
                    <ul class="page-block-1-list">
                        <li class="page-block-1-list__item page-block-1-list__item_1 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle"> Подводный душ-массаж тела</span>
                        </li>
                    </ul>
                    <div class="page-block-1__button-wrap animated-block-js fade">
                        <a href="#" class="button_black page-block-1__button">
                            Записаться on-line
                        </a>
                        <a href="#cosmetology" class="button_black page-block-1__button
                        page-block-1__button_black js-cosmetology-specialist__button">
                            Наши специалисты
                        </a>
                        <div class="page-block-1__button-line"></div>
                    </div>
                </div>
                <img src="img/spa/img_3.jpg" alt="image" class="page-block-1-content__image animated-block-js slide-right">
            </div>
        </div>

        <div class="page-block-1 animation-wrapper-js">
            <h2 class="page-block-1__heading page-block-1__heading_right animated-block-js slide-left">КОСМЕТОЛОГИЯ ТЕЛА</h2>
            <div class="page-block-1-content page-block-1-content_left">
                <img src="img/spa/img_4.jpg" alt="image" class="page-block-1-content__image page-block-1-content__image_left animated-block-js slide-left">
                <div class="page-block-1-content__info">
                    <ul class="page-block-1-list">
                        <li class="page-block-1-list__item page-block-1-list__item_1 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle"> Талассотерапия THALGO</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_2 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">Похудение и моделирование THALGO</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_3 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle"> Очищение THALGO</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_4 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">Похудение и моделирование ERICSON</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_5 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">MORPHO-BUST. Комплексный уход за бюстом и зоной декольте</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_6 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">Очищение ERICSON</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_7 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">Интегративное похудение</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_8 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">Шугаринг</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_9 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">SPA-ритуалы</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_10 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">SPA-ритуалы</span>
                        </li>
                    </ul>
                    <div class="page-block-1__button-wrap animated-block-js fade">
                        <a href="#" class="button_black page-block-1__button">
                            Записаться on-line
                        </a>
                        <a href="#cosmetology" class="button_black page-block-1__button
                        page-block-1__button_black js-cosmetology-specialist__button">
                            Наши специалисты
                        </a>
                        <div class="page-block-1__button-line"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-block-1 page-block-1_right animation-wrapper-js">
            <h2 class="page-block-1__heading animated-block-js slide-right">ЭКСПРЕСС-ПРОГРАММА TEEN-SPA</h2>
            <div class="page-block-1-content">
                <div class="page-block-1-content__info">
                    <ul class="page-block-1-list page-block-1-list_botom_arrow">
                        <li class="page-block-1-list__item page-block-1-list__item_1 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle"> Косметическая процедура для лица</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_2 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Естетственное сияние Hydra Facial</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_3 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle"> Гигиеническая чистка (маска по типу кожи THALGO)</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_4 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Пилинг Laboratories Filorgа</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_5 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Программа Талгодермил (лечение акне)</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_6 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Кислотный пилинг Hydra Facial (лечение акне)</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_7 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Массаж общий</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_8 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Массаж по зонам</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_9 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Массаж-дренаж (при бронхите)</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_10 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Массаж мешочками с горячим песком с острова</span>
                        </li>
                        <li class="page-block-1-list__item">
                            <span class="page-block-1-list__text triangle">Массаж мешочками с горячим песком с острова</span>
                        </li>
                    </ul>
                    <div class="list__more animated-block-js fade">
                        <svg><use xlink:href="#down-arrow"></use></svg>
                    </div>
                    <div class="page-block-1__button-wrap animated-block-js fade">
                        <a href="#" class="button_black page-block-1__button">
                            Записаться on-line
                        </a>
                        <a href="#cosmetology" class="button_black page-block-1__button
                        page-block-1__button_black js-cosmetology-specialist__button">
                            Наши специалисты
                        </a>
                        <div class="page-block-1__button-line"></div>
                    </div>
                </div>
                <img src="img/spa/img_5.jpg" alt="image" class="page-block-1-content__image animated-block-js slide-right">
            </div>
        </div>

        <div class="people line-bottom line-bottom_custom">
            <h2 class="people__heading">НАШИ СПЕЦИАЛИСТЫ</h2>
            <div id="massage" class="people-section massage-specialist animation-wrapper-js">
                <h3 class="people-section__heading">МАССАЖ</h3>
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

            <div id="cosmetology" class="people-section cosmetology-specialist animation-wrapper-js">
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
                </ul>
            </div>
        </div>

    </div>

    <?php include_once('includes/footer.php');?> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/common.min.js"></script>
<script src="js/spa.min.js"></script>
</body>
</html>