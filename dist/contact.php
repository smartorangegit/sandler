<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Contact</title>
</head>
<body>
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/svg-sprite.php');?>

    <div class="container">
        <div class="contact-info">
            <div class="contact-info-block_1">
                <div class="contact-info__heading-wrap">
                    <h1 class="contact-info__heading">КОНТАКТЫ:</h1>
                </div>
                <p class="contact-info__text contact-info__text_margin_top">МЫ ВСЕГДА РАДЫ ВАМ</p>
                <p class="contact-info__text">ПО АДРЕСУ: <span class="contact-info__text_bold">КИЕВ, МОСКОВСКАЯ, 27</span></p>
                <p class="contact-info__text">И ПО НОМЕРУ: <span class="contact-info__text_bold"><a href="tel: +380442885888" class="contact-info__tel">+3 8 044 288 58 88</a>, <a href="tel: +380504167722" class="contact-info__tel contact-info__tel_2">+3 8 050 416 77 22</a></span></p>
                <p class="contact-info__text contact-info__text_arial">МЫ ЖДЕМ ВАС!</p>
            </div>
            <div class="contact-info-block_2">
                <div class="contact-info__heading-wrap contact-info__heading_width_full">
                    <h1 class="contact-info__heading">НАПИШИТЕ НАМ:</h1>
                </div>
                <form action="" class="form contact-form">
                    <input type="text" class="form__input" placeholder="Имя">
                    <input type="email" class="form__input" placeholder="E-mail">
                    <textarea class="form__input form__textarea" placeholder="Ваше сообщение"></textarea>
                    <button class="form__button" type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </div>

    <div id="map" class="map"></div>

    <?php include_once('includes/footer.php');?> 

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkkNgvCFDLDhP_qSDZhMRyzOG8bZ3hJYs"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/common.min.js"></script>
<script src="js/contact.min.js"></script>
</body>
</html>