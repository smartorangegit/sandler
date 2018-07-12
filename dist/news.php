<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>News</title>
</head>
<body>
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/svg-code.php');?>
    
    <section class="top">
        <div class="page-heading-wrap">
            <h1 class="page-heading">Новости</h1>
        </div>
        <div class="page-slider-wrap news-slider-wrap">
            <ul class="page-slider">
                <li class="page-slider__item">
                    <img src="img/news/slider/img_1.jpg" alt="image" class="page-slider__image">
                    <div class="page-slider-content">
                        <p class="page-slider-content__text">ПРИМЕРЬ НОВЫЙ ОБРАЗ С КОЛЕКЦИЕЙ</p>
                        <p class="page-slider-content__text page-slider-content__text_big page-slider-content__text_black">Mesauda Milano Matte</p>
                    </div>
                </li>
                <li class="page-slider__item">
                    <img src="img/news/slider/img_1.jpg" alt="image" class="page-slider__image">
                    <div class="page-slider-content">
                        <p class="page-slider-content__text">ПРИМЕРЬ НОВЫЙ ОБРАЗ С КОЛЕКЦИЕЙ</p>
                        <p class="page-slider-content__text page-slider-content__text_big page-slider-content__text_black">Mesauda Milano Matte</p>
                    </div>
                </li>
                <li class="page-slider__item">
                    <img src="img/news/slider/img_1.jpg" alt="image" class="page-slider__image">
                    <div class="page-slider-content">
                        <p class="page-slider-content__text">ПРИМЕРЬ НОВЫЙ ОБРАЗ С КОЛЕКЦИЕЙ</p>
                        <p class="page-slider-content__text page-slider-content__text_big page-slider-content__text_black">Mesauda Milano Matte</p>
                    </div>
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

    <main class="main line-bottom">
        <div class="container news__container">
            <ul class="news-list">
                <li class="news-list__item">
                    <div class="news-list-image">
                        <div class="news-list__date-wrap">
                            <p class="news-list__date">5 мая 2018 г.</p>
                        </div>
                        <img src="img/news/news-1.jpg" alt="image" class="news-list-image__image">
                    </div>
                    <h2 class="news-list__heading">Каждая 5</h2>
                    <a href="#" class="button_black news-list__button">ПОДРОБНЕЕ</a>
                </li>
                <li class="news-list__item">
                    <div class="news-list-image">
                        <div class="news-list__date-wrap">
                            <p class="news-list__date">5 мая 2018 г.</p>
                        </div>
                        <img src="img/news/news-2.jpg" alt="image" class="news-list-image__image">
                    </div>
                    <h2 class="news-list__heading">Каждая 5я СПА- процедура в пода...</h2>
                    <a href="#" class="button_black news-list__button">ПОДРОБНЕЕ</a>
                </li>
                <li class="news-list__item">
                    <div class="news-list-image">
                        <div class="news-list__date-wrap">
                            <p class="news-list__date">5 мая 2018г.</p>
                        </div>
                        <img src="img/news/news-3.jpg" alt="image" class="news-list-image__image">
                    </div>
                    <h2 class="news-list__heading">Каждая 5я СПА- процедура в пода...</h2>
                    <a href="#" class="button_black news-list__button">ПОДРОБНЕЕ</a>
                </li>
                <li class="news-list__item">
                    <div class="news-list-image">
                        <div class="news-list__date-wrap">
                            <p class="news-list__date">5 мая 2018 г.</p>
                        </div>
                        <img src="img/news/news-4.jpg" alt="image" class="news-list-image__image">
                    </div>
                    <h2 class="news-list__heading">Каждая 5я СПА- процедура в пода...</h2>
                    <a href="#" class="button_black news-list__button">ПОДРОБНЕЕ</a>
                </li>
            </ul>
        </div>
        <div class="pagination-wrap">
            <ul class="pagination">
                <li class="pagination__item">
                    <a href="#" class="pagination__link">1</a>
                </li>
                <li class="pagination__item">
                    <a href="#" class="pagination__link">2</a>
                </li>
                <li class="pagination__item">
                    <a href="#" class="pagination__link">3</a>
                </li>
                <li class="pagination__item">
                    <a href="#" class="pagination__link">4</a>
                </li>
                <li class="pagination__item">
                    <a href="#" class="pagination__link">. . .</a>
                </li>
                <li class="pagination__item">
                    <a href="#" class="pagination__link pagination__link_active">8</a>
                </li>
                <li class="pagination__item">
                    <a href="#" class="pagination__link">9</a>
                </li>
                <li class="pagination__item">
                    <a href="#" class="pagination__link">10</a>
                </li>
            </ul>
            <button class="pagination__button pagination__button_prev">
                <span class="pagination__button-text">Prev <snap class="pagination__number">4</snap></span>
                <svg class="pagination__button-icon long-arrow_revers"><use xlink:href="#long-arrow"></use></svg>
            </button>
            <button class="pagination__button pagination__button_next">
                <span class="pagination__button-text">Next <snap class="pagination__number">4</snap></span>
                <svg class="pagination__button-icon"><use xlink:href="#long-arrow"></use></svg>
            </button>
        </div>

        <div class="news-subscribe">
            <span class="news-subscribe__text">Подписаться на новости и акции</span>
            <button href="#" class="button_black news-subscribe__button">Подписаться</button>
        </div>
    </main>
    

    <?php include_once('includes/footer.php');?> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/common.min.js"></script>
<script src="js/news.min.js"></script>
</body>
</html>