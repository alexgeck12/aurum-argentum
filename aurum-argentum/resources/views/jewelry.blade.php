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
        <span>Глaвнaя / Ювeлирныe укрaшeния</span>
    </div>
</div>

<!-- Block Populars -->

    <div class="blue-pattern">
        <div class="mg-image">
            <a href="./zoloto">
                <img src="img/goldJuveliry.jpg">
            </a>
        </div>
        <div class="mg-image silver-img-margin">
            <a href="./silver">
                <img src="img/silverJuveliry.jpg">
            </a>
        </div>
    </div>

@include('footer')
</body>
</html>