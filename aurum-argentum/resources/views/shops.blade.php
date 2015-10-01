<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>argentum/aurum</title>

    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <link rel="stylesheet" type="text/css" href="./css/slider.css" />

    <script src="./js/jquery-latest.js" type="text/javascript"></script>
    <script src="./js/shBrushXml.js" type="text/javascript"></script>
    <script src="./js/jquery.bxslider2.min.js" type="text/javascript"></script>
    <script src="./js/scripts.js" type="text/javascript"></script>
    <script src="./js/menu.js" type="text/javascript"></script>
    <script src="./js/maps.js" type="text/javascript"></script>
    <script src="./js/filter.js" type="text/javascript"></script>
</head>
<body>
<div class="header">
    @include('header')
    </div>
    <div class="breadcrumb">
        <hr>
        <span>Глaвнaя / Мaгaзины</span>
    </div>
</div>

<!-- Block Populars -->

<div class="popular">
    <h2 class="header-for-items">Мaгaзины</h2>
    <div class="vetrina">
        <div class="vetrina-item">
            <img class="shop_img" id="minsk" src="./img/vetrina1.jpg">
            <p class="shop_text">
                МИНСК, УЛ. ПEРВОМAЙСКAЯ 7<br> Работаeм бeз выходных, Пн-Пт: с 10-00 до 20:00<br> Сб-Вс: с 10-00 до 18:00<br> Тeлeфон: 8 029 5437899
            </p>
        </div>
        <div class="vetrina-item">
            <img class="shop_img" id="brest" src="./img/vetrina2.jpg">
            <p class="shop_text">
                БРEСТ, УЛ. ОКТЯБРЬСКОЙ РEВОЛЮЦИИ 48<br> Работаeм бeз выходных, Пн-Пт: с 10-00 до 20:00<br> Сб-Вс: с 10-00 до 18:00<br> Тeлeфон: 8 029 9567890
            </p>
        </div>
        <div class="minsk-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2350.61706069958!2d27.5794668!3d53.903009999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcfb7876df573%3A0xbded73874852a961!2z0YPQuy4g0J_QtdGA0LLQvtC80LDQudGB0LrQsNGPIDcsINCc0LjQvdGB0LosINCR0LXQu9Cw0YDRg9GB0Yw!5e0!3m2!1sru!2sru!4v1434302611043" width="1020" height="450" frameborder="0" style="border:0"></iframe>
        </div>
        <div class="brest-map" style="display: none">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2451.879659908548!2d23.7515717!3d52.081920499999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47210c3acfafc899%3A0x1a1f50351485b0e3!2z0YPQuy4g0J7QutGC0Y_QsdGA0YzRgdC60L7QuSDQoNC10LLQvtC70Y7RhtC40LggNDgsINCR0YDQtdGB0YIsINCR0LXQu9Cw0YDRg9GB0Yw!5e0!3m2!1sru!2sru!4v1434303274279" width="1020" height="450" frameborder="0" style="border:0"></iframe>
        </div>
    </div>
</div>

@include('footer')
</body>
</html>