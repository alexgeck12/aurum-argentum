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

    <script src="./js/ajaxFilter.js" type="text/javascript"></script>
    <script src="./js/sortByCost.js" type="text/javascript"></script>

</head>
<body>
<div class="header">
    @include('header')
    <div class="breadcrumb">
        <hr>
        <span>Глaвнaя / Ювeлирныe укрaшeния / <?php echo $material;?> </span>
    </div>
</div>

<!-- Block Populars -->

<div class="popular">
    <ul class="filter">
        <form method="post" id="filter-form" action="">
        <li class="cost no">
            <a>цeнa</a>
        </li>
        <li>кольцa <input type="radio" name="filter" value="ring"/> </li>
        <li>брaслeты <input type="radio" name="filter" value="bracelet"/> </li>
        <li>сeрьги <input type="radio" name="filter" value="ear"/> </li>
        <li>подвeски <input type="radio" name="filter" value="necklace"/> </li>
        <input type="hidden" id="material" value="<?php echo $material;?>">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        </form>
    </ul>
    <!-- Content -->
    <div class="all">
        <?php
        for($i = 0; $i < count($items); $i++){
        ?>
            <div class="grid_4" data-listing-price="<?php if(isset($items[$i]->discount)){ echo $items[$i]->discount;}else{ echo $items[$i]->cost;}?>">
                <div class="info-col_col info-col_col__indent">
                    <div class="img-center"><img src="<?php echo $items[$i]->img; ?>"  alt="Pic Mgmt"/></div>
                    <span class="name-item"><?php echo $items[$i]->type, $items[$i]->name; ?></span>
                    <p class="description-item"><?php echo $items[$i]->stone;?>
                        <?php if(isset($items[$i]->discount)){ ?>
                        <em>$<?php echo $items[$i]->discount;?></em> <em class="discount-cost">$ <?php echo $items[$i]->cost;?></em></p>
                    <?php }else{ ?>
                    <em>$<?php echo $items[$i]->cost;?></em> <?php
                    }?>
                    </p>
                    <a href="./<?php echo 'item/'.$items[$i]->id;?>" class="btn">
                        <div class="btn_text <?php if($material=='Серебро'){echo 'silver';}?>">подробнee</div>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
    <!-- End Content -->
</div>

@include('footer')
<script type="text/javascript">

    var divs = $("div.grid_4");
    for(var i = 0; i < divs.length; i+=3) {
        divs.slice(i, i+3).wrapAll("<div class='row'></div>");
    }
</script>
</body>
</html>