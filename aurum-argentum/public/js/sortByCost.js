$( document ).ready(function() {

    $("li.cost").click(function() {

        if($(this).hasClass('no')){

            var divList = $(".grid_4");
            divList.sort(function(a, b){
                var contentA = parseInt( $(a).attr('data-listing-price'));
                var contentB = parseInt( $(b).attr('data-listing-price'));
                return contentA - contentB
            });
            $(".all").html( divList );
            var divs = $("div.grid_4");
            for(var i = 0; i < divs.length; i+=3) {
                divs.slice(i, i+3).wrapAll("<div class='row'></div>");
            }

            $(this).html('<a>цeнa</a> <img class="arrow" src="img/up.png">');
            $(this).addClass("up");
            $(this).removeClass("no");
            return;
        }

        if($(this).hasClass('up')){

            var divList = $(".grid_4");
            divList.sort(function(a, b){
                var contentA = parseInt( $(a).attr('data-listing-price'));
                var contentB = parseInt( $(b).attr('data-listing-price'));
                return contentB - contentA
            });
            $(".all").html( divList );
            var divs = $("div.grid_4");
            for(var i = 0; i < divs.length; i+=3) {
                divs.slice(i, i+3).wrapAll("<div class='row'></div>");
            }

            $(this).html('<a>цeнa</a> <img class="arrow" src="img/down.png">');
            $(this).addClass("down");
            $(this).removeClass("up");
            return;
        }

        if($(this).hasClass('down')){

            $(this).html('<a>цeнa</a>');
            $(this).addClass("no");
            $(this).removeClass("down");
            return;
        }
    });
});