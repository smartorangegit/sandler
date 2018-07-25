<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Meet Yulia</title>
</head>
<body>
    <div class="restaurant-wrap">
        <?php include_once('includes/header.php');?>
        <?php include_once('includes/svg-sprite.php');?>

        <div class="container">
            <div class="restaurant__content">
                <h1 class="restaurant__heading">Ресторан радо откроет свои двери для Вас уже этой осенью!</h1>
                <div class="restaurant-contact">
                    <p class="restaurant-contact__text">Следите за новостями на</p>
                    <ul class="social restaurant-social">
                        <li class="social__item">
                            <a href="#" class="social__link">
                                <svg class="social__icon"><use xlink:href="#facebook"></use></svg>
                                Facebook
                            </a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link">
                                <svg class="social__icon"><use xlink:href="#pinterest"></use></svg>
                                Pinterest
                            </a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link">
                                <svg class="social__icon"><use xlink:href="#instagram"></use></svg>
                                Instagram
                            </a>
                        </li>
                    </ul>
                </div>
            </div> 
        </div>

        <footer class="footer restaurant-footer">
            <div class="footer__container">
                <span class="footer__text">
                    <span class="footer__text_word">&copy; Sandler since 2012</span>
                    <span class="footer__text_word">Московская, 27</span>
                    <span class="footer__text_word footer__text_word_last"><a class="footer__link" href="tel: +804428858881">044 288 58 881</a>,
                    <a class="footer__link footer__link_border" href="tel: +80504167722">050 416 77 22</a></span>
                </span>
                <div class="footer__button-wrap">
                    <!-- <button class="footer__button footer__button_text_gray">Подписаться на рассылку</button> -->
                    <input type="text" class="footer__input" placeholder="Подписаться на рассылку">
                    <button class="footer__button footer__button_big_letter">ПОДПИСАТЬСЯ</button>
                </div>
                <ul class="social">
                    <li class="social__item">
                        <a href="#" class="social__link">
                            <svg class="social__icon"><use xlink:href="#facebook"></use></svg>
                            Facebook
                        </a>
                    </li>
                    <li class="social__item">
                        <a href="#" class="social__link">
                            <svg class="social__icon"><use xlink:href="#pinterest"></use></svg>
                            Pinterest
                        </a>
                    </li>
                    <li class="social__item">
                        <a href="#" class="social__link">
                            <svg class="social__icon"><use xlink:href="#instagram"></use></svg>
                            Instagram
                        </a>
                    </li>
                </ul>
            </div>
            <p class="smart-orange">Сайт разработан студией <a href="http://smartorange.com.ua/" class="smart-orange__link">SMART ORANGE</a></p>
        </footer>
    </div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkkNgvCFDLDhP_qSDZhMRyzOG8bZ3hJYs"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/common.min.js"></script>
<script src="js/contact.min.js"></script>
</body>
</html>