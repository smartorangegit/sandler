<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Salon</title>
</head>
<body>
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/svg-sprite.php');?>
    
    <section class="top">
        <div class="page-heading-wrap">
            <h1 class="page-heading">ИМИДЖ-СТУДИЯ SANDLER</h1>
            <div class="page-heading__stick"></div>
        </div>
        <div class="page-slider-wrap salon-slider-wrap">
            <ul class="page-slider">
                <li class="page-slider__item">
                    <img src="img/salon/slider/slide-1.jpg" alt="image" class="page-slider__image">
                </li>
                <li class="page-slider__item">
                    <img src="img/salon/slider/slide-1.jpg" alt="image" class="page-slider__image">
                </li>
                <li class="page-slider__item">
                    <img src="img/salon/slider/slide-1.jpg" alt="image" class="page-slider__image">
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
            <h2 class="page-block-1__heading animated-block-js slide-right">ВОЛОСЫ</h2>
            <div class="page-block-1-content">
                <div class="page-block-1-content__info">
                    <ul class="page-block-1-list">
                        <li class="page-block-1-list__item page-block-1-list__item_1 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle"> Стрижка и укладка</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_2 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Детская стрижка</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_3 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle"> Вечерняя укладка</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_4 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Окрашивание волос</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_6 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">“Абсолютное счастье” для волос</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_7 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Восстановление волос Olaplex</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_8 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Кератиновая система востановления и выравнивания волос</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_9 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Камуфлирование седины</span>
                        </li>
                    </ul>
                    <div class="page-block-1__button-wrap animated-block-js fade">
                        <a href="#" class="button_black page-block-1__button">
                            Записаться on-line
                        </a>
                        <a href="#hair" class="button_black page-block-1__button
                        page-block-1__button_black js-anchor__button">
                            Наши специалисты
                        </a>
                        <div class="page-block-1__button-line"></div>
                    </div>
                </div>
                <img src="img/salon/img_1.jpg" alt="image" class="page-block-1-content__image animated-block-js slide-right">
            </div>
        </div>

        <div class="page-block-1 animation-wrapper-js">
            <h2 class="page-block-1__heading page-block-1__heading_right animated-block-js slide-left">ВИЗАЖ</h2>
            <div class="page-block-1-content page-block-1-content_left">
                <img src="img/salon/img_2.jpg" alt="image" class="page-block-1-content__image page-block-1-content__image_left animated-block-js slide-left">
                <div class="page-block-1-content__info">
                    <ul class="page-block-1-list">
                        <li class="page-block-1-list__item page-block-1-list__item_1 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle"> Make up</span>
                            <ul class="page-block-1-sublist">
                                <li class="page-block-1-list__item ">
                                    <span class="page-block-1-list__text dash">дневной</span>
                                </li>
                                <li class="page-block-1-list__item ">
                                    <span class="page-block-1-list__text dash triangle">вечерний</span>
                                    <ul class="page-block-1-sublist">
                                        <li class="page-block-1-list__item">
                                            <span class="page-block-1-list__text dash">дневной</span>
                                        </li>
                                        <li class="page-block-1-list__item">
                                            <span class="page-block-1-list__text dash">вечерний</span>
                                        </li>
                                        <li class="page-block-1-list__item">
                                            <span class="page-block-1-list__text dash">экспресс</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="page-block-1-list__item">
                                    <span class="page-block-1-list__text dash">экспресс</span>
                                </li>
                            </ul>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_2 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">Ресницы</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_3 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle"> Брови</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_4 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">Урок макияжа</span>
                        </li>
                    </ul>
                    <div class="page-block-1__button-wrap animated-block-js fade">
                        <a href="#" class="button_black page-block-1__button">
                            Записаться on-line
                        </a>
                        <a href="#visage" class="button_black page-block-1__button
                        page-block-1__button_black js-anchor__button">
                            Наши специалисты
                        </a>
                        <div class="page-block-1__button-line"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-block-1 page-block-1_right animation-wrapper-js">
            <h2 class="page-block-1__heading animated-block-js slide-right">Ногтевой сервис</h2>
            <div class="page-block-1-content">
                <div class="page-block-1-content__info">
                    <ul class="page-block-1-list">
                        <li class="page-block-1-list__item page-block-1-list__item_2 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle"> Маникюр</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_2 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Педикюр</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_3 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle"> Уход для рук “Кокон” от Maria Galland (Франция)</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_4 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Покрытие</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_5 animated-block-js slide-left">
                            <span class="page-block-1-list__text triangle">Уход за руками и ногами</span>
                        </li>
                    </ul>
                    <div class="page-block-1__button-wrap animated-block-js fade">
                        <a href="#" class="button_black page-block-1__button">
                            Записаться on-line
                        </a>
                        <a href="#nails" class="button_black page-block-1__button
                        page-block-1__button_black js-anchor__button">
                            Наши специалисты
                        </a>
                        <div class="page-block-1__button-line"></div>
                    </div>
                </div>
                <img src="img/salon/img_3.jpg" alt="image" class="page-block-1-content__image animated-block-js slide-right">
            </div>
        </div>

        <div class="page-block-1 animation-wrapper-js">
            <h2 class="page-block-1__heading page-block-1__heading_right animated-block-js slide-left">Стилист</h2>
            <div class="page-block-1-content page-block-1-content_left">
                <img src="img/salon/img_4.jpg" alt="image" class="page-block-1-content__image page-block-1-content__image_left animated-block-js slide-left">
                <div class="page-block-1-content__info">
                    <ul class="page-block-1-list">
                        <li class="page-block-1-list__item page-block-1-list__item_1 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle"> Гардероб-тест</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_2 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">Подготовка к фотопроекту</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_3 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle"> Консультация стилиста, имидж-дизайнера/span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_4 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">Шопинг-игра! Экспресс обновление</span>
                        </li>
                        <li class="page-block-1-list__item page-block-1-list__item_5 animated-block-js slide-right">
                            <span class="page-block-1-list__text triangle">Персональный шопинг</span>
                        </li>
                    </ul>
                    <div class="page-block-1__button-wrap animated-block-js fade">
                        <a href="#" class="button_black page-block-1__button">
                            Записаться on-line
                        </a>
                        <a href="#stylist" class="button_black page-block-1__button
                        page-block-1__button_black js-anchor__button">
                            Наши специалисты
                        </a>
                        <div class="page-block-1__button-line"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="people line-bottom line-bottom_custom">
            <h2 class="people__heading">НАШИ СПЕЦИАЛИСТЫ</h2>
            <div id="hair" class="people-section animation-wrapper-js">
                <h3 class="people-section__heading">ВОЛОСЫ</h3>
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

            <div id="visage" class="people-section animation-wrapper-js">
                <h3 class="people-section__heading">ВИЗАЖ</h3>
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

            <div id="nails" class="people-section animation-wrapper-js">
                <h3 class="people-section__heading">Ногтевой сервис</h3>
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

            <div id="stylist" class="people-section animation-wrapper-js">
                <h3 class="people-section__heading">Стилист</h3>
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
<script src="js/salon.min.js"></script>
</body>
</html>