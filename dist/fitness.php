<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Fitness</title>
</head>
<body>
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/svg-sprite.php');?>
    
    <section class="top">
        <div class="page-heading-wrap">
            <h1 class="page-heading">ФИТНЕС-КЛУБ</h1>
            <div class="page-heading__stick"></div>
        </div>
        <div class="page-slider-wrap salon-slider-wrap">
            <ul class="page-slider">
                <li class="page-slider__item">
                    <img src="img/fitness/slider/slide-1.jpg" alt="image" class="page-slider__image">
                </li>
                <li class="page-slider__item">
                    <img src="img/fitness/slider/slide-1.jpg" alt="image" class="page-slider__image">
                </li>
                <li class="page-slider__item">
                    <img src="img/fitness/slider/slide-1.jpg" alt="image" class="page-slider__image">
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

        <div class="page-block-2 animation-wrapper-js">
            <h2 class="page-block-1__heading page-block-2__heading animated-block-js slide-right">ТАНЦЫ</h2>
            <div class="page-block-2-content">
                <div class="page-block-2-content__info animated-block-js slide-right">
                    <div class="page-block-2-text">
                        <p class="page-block-2__text">
                        В нашей студии существует большое разнообразие индивидуальных тренировок, для женщин, мужчин и детей.
                        </p>
                        <p class="page-block-2__text">
                            В зависимости от своих предпочтений и своего расписания дня Вы сможете подобрать для себя подходящую тренировку.
                        </p>
                        <p class="page-block-2__text">
                            В среднем тренировка занимает от 45 до 60 минут.   Занятия проходят весело и динамично, они увлекательны и разнообразны. У Вас появляется стимул совершенствовать себя и стремиться к большему.
                        </p>
                         <p class="page-block-2__text">
                            Коррекция фигуры:
                        </p>
                        <p class="page-block-2__text">
                            Фитнес программы:
                        </p>
                        <ul class="page-block-2-list">
                            <li class="page-block-2__text">- похудение,</li>
                            <li class="page-block-2__text">- набор мышечной массы, </li>
                            <li class="page-block-2__text">- коррекция проблемных зон,</li>
                            <li class="page-block-2__text">- подростковый фитнес.</li>
                        </ul>
                        <p class="page-block-2__text">
                            Реабилитация:
                        </p>
                        <ul class="page-block-2-list">
                            <li class="page-block-2__text">- восстановление после травм опорно-двигательного аппарата,</li>
                            <li class="page-block-2__text">- коррекция осанки,</li>
                            <li class="page-block-2__text">- послеродовая коррекция тела женщин.</li>
                        </ul>
                        <p class="page-block-2__text">
                            Разработка индивидуальных программ для самостоятельных занятий.
                        </p>
                    </div>
                </div>
                <div class="page-block-2-content-image animated-block-js slide-left">
                    <img src="img/fitness/img_1.jpg" alt="image" class="page-block-2-content__image">
                </div>
                <div class="page-block-2__button-wrap animated-block-js fade">
                    <a href="#" class="button_black page-block-2__button form-show-js">
                        Записаться on-line
                    </a>
                    <a href="#dance" class="button_black page-block-2__button
                        page-block-2__button_black js-anchor__button">
                        Наши специалисты
                    </a>
                </div>
            </div>
        </div>

        <div class="page-block-2 animation-wrapper-js">
            <h2 class="page-block-1__heading page-block-2__heading page-block-2__heading_left animated-block-js slide-left">ПЕРСОНАЛЬНЫЙ ФИТНЕС</h2>
            <div class="page-block-2-content">
                <div class="page-block-2-content-image animated-block-js slide-right">
                    <img src="img/fitness/img_2.jpg" alt="image" class="page-block-2-content__image">
                </div>
                <div class="page-block-2-content__info animated-block-js slide-left">
                    <div class="page-block-2-text">
                        <p class="page-block-2__text">
                        В нашей студии существует большое разнообразие индивидуальных тренировок, для женщин, мужчин и детей.
                        </p>
                        <p class="page-block-2__text">
                            В зависимости от своих предпочтенийи своего расписания дня Вы сможете подобрать для себя подходящую тренировку.
                        </p>
                        <p class="page-block-2__text">
                            В среднем тренировка занимает от 45 до 60 минут.   Занятия проходят весело и динамично, они увлекательны и разнообразны. У Вас появляется стимул совершенствовать себя и стремиться к большему.
                        </p>
                         <p class="page-block-2__text">
                            Коррекция фигуры:
                        </p>
                        <p class="page-block-2__text">
                            Фитнес программы:
                        </p>
                        <ul class="page-block-2-list">
                            <li class="page-block-2__text">- похудение,</li>
                            <li class="page-block-2__text">- набор мышечной массы, </li>
                            <li class="page-block-2__text">- коррекция проблемных зон,</li>
                            <li class="page-block-2__text">- подростковый фитнес.</li>
                        </ul>
                        <p class="page-block-2__text">
                            Реабилитация:
                        </p>
                        <ul class="page-block-2-list">
                            <li class="page-block-2__text">- восстановление после травм опорно-двигательного аппарата,</li>
                            <li class="page-block-2__text">- коррекция осанки,</li>
                            <li class="page-block-2__text">- послеродовая коррекция тела женщин.</li>
                        </ul>
                        <p class="page-block-2__text">
                            Разработка индивидуальных программ для самостоятельных занятий.
                        </p>
                    </div>
                </div>
                <div class="page-block-2__button-wrap animated-block-js fade">
                    <a href="#fitness" class="button_black page-block-2__button
                        page-block-2__button_black js-anchor__button">
                        Наши специалисты
                    </a>
                    <a href="#" class="button_black page-block-2__button form-show-js">
                        Записаться on-line
                    </a>
                </div>
            </div>
        </div>

        <div class="page-block-2 animation-wrapper-js">
            <h2 class="page-block-1__heading page-block-2__heading animated-block-js slide-right">ПИЛАТЕС</h2>
            <div class="page-block-2-content">
                <div class="page-block-2-content__info animated-block-js slide-right">
                    <div class="page-block-2-text">
                        <p class="page-block-2__text">
                        В нашей студии существует большое разнообразие индивидуальных тренировок, для женщин, мужчин и детей.
                        </p>
                        <p class="page-block-2__text">
                            В зависимости от своих предпочтений и своего расписания дня Вы сможете подобрать для себя подходящую тренировку.
                        </p>
                        <p class="page-block-2__text">
                            В среднем тренировка занимает от 45 до 60 минут.   Занятия проходят весело и динамично, они увлекательны и разнообразны. У Вас появляется стимул совершенствовать себя и стремиться к большему.
                        </p>
                         <p class="page-block-2__text">
                            Коррекция фигуры:
                        </p>
                        <p class="page-block-2__text">
                            Фитнес программы:
                        </p>
                        <ul class="page-block-2-list">
                            <li class="page-block-2__text">- похудение,</li>
                            <li class="page-block-2__text">- набор мышечной массы, </li>
                            <li class="page-block-2__text">- коррекция проблемных зон,</li>
                            <li class="page-block-2__text">- подростковый фитнес.</li>
                        </ul>
                        <p class="page-block-2__text">
                            Реабилитация:
                        </p>
                        <ul class="page-block-2-list">
                            <li class="page-block-2__text">- восстановление после травм опорно-двигательного аппарата,</li>
                            <li class="page-block-2__text">- коррекция осанки,</li>
                            <li class="page-block-2__text">- послеродовая коррекция тела женщин.</li>
                        </ul>
                        <p class="page-block-2__text">
                            Разработка индивидуальных программ для самостоятельных занятий.
                        </p>
                    </div>
                </div>
                <div class="page-block-2-content-image animated-block-js slide-left">
                    <img src="img/fitness/img_3.jpg" alt="image" class="page-block-2-content__image">
                </div>
                <div class="page-block-2__button-wrap animated-block-js fade">
                    <a href="#" class="button_black page-block-2__button form-show-js">
                        Записаться on-line
                    </a>
                    <a href="#pilates" class="button_black page-block-2__button
                        page-block-2__button_black js-anchor__button">
                        Наши специалисты
                    </a>
                </div>
            </div>
        </div>

        <div class="page-block-2 page-block-2_last animation-wrapper-js">
            <h2 class="page-block-1__heading page-block-2__heading page-block-2__heading_left animated-block-js slide-left">KANGOO JUMPS</h2>
            <div class="page-block-2-content">
                <div class="page-block-2-content-image animated-block-js slide-right">
                    <img src="img/fitness/img_4.jpg" alt="image" class="page-block-2-content__image">
                </div>
                <div class="page-block-2-content__info animated-block-js slide-left">
                    <div class="page-block-2-text">
                        <p class="page-block-2__text">
                        В нашей студии существует большое разнообразие индивидуальных тренировок, для женщин, мужчин и детей.
                        </p>
                        <p class="page-block-2__text">
                            В зависимости от своих предпочтенийи своего расписания дня Вы сможете подобрать для себя подходящую тренировку.
                        </p>
                        <p class="page-block-2__text">
                            В среднем тренировка занимает от 45 до 60 минут.   Занятия проходят весело и динамично, они увлекательны и разнообразны. У Вас появляется стимул совершенствовать себя и стремиться к большему.
                        </p>
                         <p class="page-block-2__text">
                            Коррекция фигуры:
                        </p>
                        <p class="page-block-2__text">
                            Фитнес программы:
                        </p>
                        <ul class="page-block-2-list">
                            <li class="page-block-2__text">- похудение,</li>
                            <li class="page-block-2__text">- набор мышечной массы, </li>
                            <li class="page-block-2__text">- коррекция проблемных зон,</li>
                            <li class="page-block-2__text">- подростковый фитнес.</li>
                        </ul>
                        <p class="page-block-2__text">
                            Реабилитация:
                        </p>
                        <ul class="page-block-2-list">
                            <li class="page-block-2__text">- восстановление после травм опорно-двигательного аппарата,</li>
                            <li class="page-block-2__text">- коррекция осанки,</li>
                            <li class="page-block-2__text">- послеродовая коррекция тела женщин.</li>
                        </ul>
                        <p class="page-block-2__text">
                            Разработка индивидуальных программ для самостоятельных занятий.
                        </p>
                    </div>
                </div>
                <div class="page-block-2__button-wrap animated-block-js fade">
                    <a href="#jumps" class="button_black page-block-2__button
                        page-block-2__button_black js-anchor__button">
                        Наши специалисты
                    </a>
                    <a href="#" class="button_black page-block-2__button form-show-js">
                        Записаться on-line
                    </a>
                </div>
            </div>
        </div>

        <div class="people line-bottom line-bottom_custom">
            <h2 class="people__heading">НАШИ ТРЕНЕРЫ</h2>
            <div id="dance" class="people-section animation-wrapper-js">
                <h3 class="people-section__heading">ТАНЦЫ</h3>
                <div class="people-slider-wrap">
                    <ul class="people-section-list dance-slider">
                        <li class="people-section-list__item">
                            <div class="people-section-list-image">
                                <img src="img/salon/people/people_1.jpg" alt="photo" class="people-section-list__image animated-block-js flip">
                                <a href="#" class="people-section-list__button form-show-js">
                                    Записаться
                                </a>
                            </div>
                            <p class="people-section-list__name">Максимович Мила</p>
                            <p class="people-section-list__position">арт директор, стилист парикмахер</p>
                        </li>
                        <li class="people-section-list__item">
                            <div class="people-section-list-image">
                                <img src="img/salon/people/people_2.jpg" alt="photo" class="people-section-list__image animated-block-js flip">
                                <a href="#" class="people-section-list__button form-show-js">
                                    Записаться
                                </a>
                            </div>
                            <p class="people-section-list__name">Максимович Мила</p>
                            <p class="people-section-list__position">арт директор, стилист парикмахер</p>
                        </li>
                        <li class="people-section-list__item">
                            <div class="people-section-list-image">
                                <img src="img/salon/people/people_3.jpg" alt="photo" class="people-section-list__image animated-block-js flip">
                                <a href="#" class="people-section-list__button form-show-js">
                                    Записаться
                                </a>
                            </div>
                            <p class="people-section-list__name">Максимович Мила</p>
                            <p class="people-section-list__position">арт директор, стилист парикмахер</p>
                        </li>
                        <li class="people-section-list__item">
                            <div class="people-section-list-image">
                                <img src="img/salon/people/people_3.jpg" alt="photo" class="people-section-list__image animated-block-js flip">
                                <a href="#" class="people-section-list__button form-show-js">
                                    Записаться
                                </a>
                            </div>
                            <p class="people-section-list__name">Максимович Мила</p>
                            <p class="people-section-list__position">арт директор, стилист парикмахер</p>
                        </li>
                    </ul>
                    <button class="page-slider__button people-slider__button_prev dance-slider_prev">
                        <span class="page-slider__button-text">Prev</span>
                        <svg class="page-slider__button-icon long-arrow_revers"><use xlink:href="#long-arrow"></use></svg>
                    </button>
                    <button class="page-slider__button people-slider__button_next dance-slider_next">
                        <span class="page-slider__button-text">Next</span>
                        <svg class="page-slider__button-icon"><use xlink:href="#long-arrow"></use></svg>
                    </button>
                </div>
            </div>

            <div id="fitness" class="people-section animation-wrapper-js">
                <h3 class="people-section__heading">ПЕРСОНАЛЬНЫЙ ФИТНЕС</h3>
                <div class="people-slider-wrap">
                    <ul class="people-section-list fitness-slider">
                        <li class="people-section-list__item">
                            <div class="people-section-list-image">
                                <img src="img/salon/people/people_1.jpg" alt="photo" class="people-section-list__image animated-block-js flip">
                                <a href="#" class="people-section-list__button form-show-js form-show-js">
                                    Записаться
                                </a>
                            </div>
                            <p class="people-section-list__name">Максимович Мила</p>
                            <p class="people-section-list__position">арт директор, стилист парикмахер</p>
                        </li>
                        <li class="people-section-list__item">
                            <div class="people-section-list-image">
                                <img src="img/salon/people/people_2.jpg" alt="photo" class="people-section-list__image animated-block-js flip">
                                <a href="#" class="people-section-list__button form-show-js form-show-js">
                                    Записаться
                                </a>
                            </div>
                            <p class="people-section-list__name">Максимович Мила</p>
                            <p class="people-section-list__position">арт директор, стилист парикмахер</p>
                        </li>
                        <li class="people-section-list__item">
                            <div class="people-section-list-image">
                                <img src="img/salon/people/people_3.jpg" alt="photo" class="people-section-list__image animated-block-js flip">
                                <a href="#" class="people-section-list__button form-show-js form-show-js">
                                    Записаться
                                </a>
                            </div>
                            <p class="people-section-list__name">Максимович Мила</p>
                            <p class="people-section-list__position">арт директор, стилист парикмахер</p>
                        </li>
                    </ul>
                    <button class="page-slider__button people-slider__button_prev fitness-slider_prev">
                        <span class="page-slider__button-text">Prev</span>
                        <svg class="page-slider__button-icon long-arrow_revers"><use xlink:href="#long-arrow"></use></svg>
                    </button>
                    <button class="page-slider__button people-slider__button_next fitness-slider_next">
                        <span class="page-slider__button-text">Next</span>
                        <svg class="page-slider__button-icon"><use xlink:href="#long-arrow"></use></svg>
                    </button>
                </div>
            </div>

            <div id="pilates" class="people-section animation-wrapper-js">
                <h3 class="people-section__heading">ПИЛАТЕС</h3>
                <div class="people-slider-wrap">
                    <ul class="people-section-list pilates-slider">
                        <li class="people-section-list__item">
                            <div class="people-section-list-image">
                                <img src="img/salon/people/people_1.jpg" alt="photo" class="people-section-list__image animated-block-js flip">
                                <a href="#" class="people-section-list__button form-show-js">
                                    Записаться
                                </a>
                            </div>
                            <p class="people-section-list__name">Максимович Мила</p>
                            <p class="people-section-list__position">арт директор, стилист парикмахер</p>
                        </li>
                        <li class="people-section-list__item">
                            <div class="people-section-list-image">
                                <img src="img/salon/people/people_2.jpg" alt="photo" class="people-section-list__image animated-block-js flip">
                                <a href="#" class="people-section-list__button form-show-js">
                                    Записаться
                                </a>
                            </div>
                            <p class="people-section-list__name">Максимович Мила</p>
                            <p class="people-section-list__position">арт директор, стилист парикмахер</p>
                        </li>
                        <li class="people-section-list__item">
                            <div class="people-section-list-image">
                                <img src="img/salon/people/people_3.jpg" alt="photo" class="people-section-list__image animated-block-js flip">
                                <a href="#" class="people-section-list__button form-show-js">
                                    Записаться
                                </a>
                            </div>
                            <p class="people-section-list__name">Максимович Мила</p>
                            <p class="people-section-list__position">арт директор, стилист парикмахер</p>
                        </li>
                        <li class="people-section-list__item">
                            <div class="people-section-list-image">
                                <img src="img/salon/people/people_3.jpg" alt="photo" class="people-section-list__image animated-block-js flip">
                                <a href="#" class="people-section-list__button form-show-js">
                                    Записаться
                                </a>
                            </div>
                            <p class="people-section-list__name">Максимович Мила</p>
                            <p class="people-section-list__position">арт директор, стилист парикмахер</p>
                        </li>
                    </ul>
                    <button class="page-slider__button people-slider__button_prev pilates-slider_prev">
                        <span class="page-slider__button-text">Prev</span>
                        <svg class="page-slider__button-icon long-arrow_revers"><use xlink:href="#long-arrow"></use></svg>
                    </button>
                    <button class="page-slider__button people-slider__button_next pilates-slider_next">
                        <span class="page-slider__button-text">Next</span>
                        <svg class="page-slider__button-icon"><use xlink:href="#long-arrow"></use></svg>
                    </button>
                </div>
            </div>

            <div id="jumps" class="people-section animation-wrapper-js">
                <h3 class="people-section__heading">KANGOO JUMPS</h3>
                <div class="people-slider-wrap">
                    <ul class="people-section-list jumps-slider">
                        <li class="people-section-list__item">
                            <div class="people-section-list-image">
                                <img src="img/salon/people/people_1.jpg" alt="photo" class="people-section-list__image animated-block-js flip">
                                <a href="#" class="people-section-list__button form-show-js">
                                    Записаться
                                </a>
                            </div>
                            <p class="people-section-list__name">Максимович Мила</p>
                            <p class="people-section-list__position">арт директор, стилист парикмахер</p>
                        </li>
                        <li class="people-section-list__item">
                            <div class="people-section-list-image">
                                <img src="img/salon/people/people_2.jpg" alt="photo" class="people-section-list__image animated-block-js flip">
                                <a href="#" class="people-section-list__button form-show-js">
                                    Записаться
                                </a>
                            </div>
                            <p class="people-section-list__name">Максимович Мила</p>
                            <p class="people-section-list__position">арт директор, стилист парикмахер</p>
                        </li>
                        <li class="people-section-list__item">
                            <div class="people-section-list-image">
                                <img src="img/salon/people/people_3.jpg" alt="photo" class="people-section-list__image animated-block-js flip">
                                <a href="#" class="people-section-list__button form-show-js">
                                    Записаться
                                </a>
                            </div>
                            <p class="people-section-list__name">Максимович Мила</p>
                            <p class="people-section-list__position">арт директор, стилист парикмахер</p>
                        </li>
                    </ul>
                    <button class="page-slider__button people-slider__button_prev jumps-slider_prev">
                        <span class="page-slider__button-text">Prev</span>
                        <svg class="page-slider__button-icon long-arrow_revers"><use xlink:href="#long-arrow"></use></svg>
                    </button>
                    <button class="page-slider__button people-slider__button_next jumps-slider_next">
                        <span class="page-slider__button-text">Next</span>
                        <svg class="page-slider__button-icon"><use xlink:href="#long-arrow"></use></svg>
                    </button>
                </div>
            </div>
        </div>

    </div>

    <?php include_once('includes/footer.php');?> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/common.min.js"></script>
<script src="js/fitness.min.js"></script>
</body>
</html>