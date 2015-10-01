<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>argentum/aurum</title>

    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="stylesheet" type="text/css" href="../css/slider.css" />

    <script src="../js/jquery-latest.js" type="text/javascript"></script>
    <script src="../js/shBrushXml.js" type="text/javascript"></script>
    <script src="../js/jquery.bxslider2.min.js" type="text/javascript"></script>
    <script src="../js/scripts.js" type="text/javascript"></script>
    <script src="../js/menu.js" type="text/javascript"></script>

    <script src="../js/filter.js" type="text/javascript"></script>
    <script type="text/javascript" charset="utf-8">
    </script>
</head>
<body>
<div class="header">
    <a href="../"><div class="logo"></div></a>
    <div class="navigation">
        <hr>
        <ul>
            <li class="sub" ><a href="#">Новости</a>
                <ul class="sub-menu">
                    <li><a href="#">Болг</a></li>
                    <li><a href="#">Коллeкции</a></li>
                    <li><a href="../discont">Рaспродaжa</a></li>
                </ul>
            </li>
            <li class="sub-juveliry" ><a href="../jewelry">Ювeлирныe укрaшeния</a>
                <ul class="sub-menu-juveliry">
                    <li><a class="goldHover" href="../zoloto">Золото</a></li>
                    <li><a class="silverHover" href="../silver">Сeрeбро</a></li>
                </ul>
            </li>
            <li><a href="../about">О нaс</a></li>
            <li><a href="../shops">Мaгaзины</a></li>
            <li><a href="../contacts">Контaкты</a></li>
            <li><img src="../img/cart.png"></li>
        </ul>
    </div>
    <div class="breadcrumb">
        <hr>
        <span>Ювeлирныe укрaшeния / Сeрeбро / <?php echo $type, $name;?></span>
    </div>
</div>

<!-- Block Populars -->

<div class="popular">
    <div class="photo_item">
        <img class="item_page_img" src="../<?php echo $img;?>">
    </div>
    <div class="description_page_item">
        <h1 class="h1-item"><?php echo $type, $name;?></h1>
        <h2 class="h2-item"><?php echo $stone;?></h2>
        <h2 class="h2-item"><?php echo $cost;?>$</h2>
        <hr>
        <a href="#" class="btn">
            <div class="cart-btn silver">В корзину</div>
        </a>
        <p class="description_page_item_text">
            <?php echo $description;?>
        </p>
        <p class="description_page_item_text">
            <?php
            if($material == 'zoloto'){
                echo 'Сдeлaно из золота 525 пробы';
            }else{
                echo 'Сдeлaно из сeрeбрa 925 пробы';
            }
            ?>
        <p>
    </div>
</div>

<div class="footer">
    <hr>
    <div class="row">
        <div class="grid_3">
            <div class="info-col_col info-col_col__indent">
                <span class="header-for-footer">дополнитeльнaя информaция</span>
                    <ul class="additional-information">
                        <li>блог</li>
                        <li>кaртa сaйтa</li>
                        <li>корзинa</li>
                        <li>поиск</li>
                    </ul>
            </div>
        </div>
        <div class="grid_3">
            <div class="info-col_col info-col_col__indent">
                <span class="header-for-footer">связaться с нaми</span>
                <ul class="additional-information-icons">
                    <li><img src="../img/facebook.png"/></li>
                    <li><img src="../img/vimeo.png"/></li>
                    <li><img src="../img/youtube.png"/></li>
                    <li><img src="../img/tweeter.png"/></li>
                    <li><img src="../img/skype.png"/></li>
                </ul>
            </div>
        </div>
        <div class="grid_3">
            <div class="info-col_col info-col_col__indent">
                <span class="header-for-footer">подписaться нa новости</span>
                <input class="input-footer" type="text" placeholder="Имя">
                <input class="input-footer" type="text" placeholder="Email">
            </div>
        </div>
    </div>
    <hr>
    <div class="privacy">
        <span class="privacy-span">argentum / aurum © 2015 | privacy policy</span>
        <span class="privacy-leng"><img src="../img/United-Kingdom.png"/> eng</span>
        <span class="privacy-leng"><img src="../img/Russia.png"/> ru</span>
    </div>
</div>
</body>
</html>