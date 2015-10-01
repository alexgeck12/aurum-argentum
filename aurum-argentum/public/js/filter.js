$( document ).ready(function() {
    $("input").click(function() {
        filter = $( "input:checked" ).val();

        if (filter === "ring"){
            $("div.all").css("display","none");
            $("div.rings").css("display","block");
            $("div.ear").css("display","none");
            $("div.necklace").css("display","none");
        };
        if (filter === "bracelet"){
            $("div.ear").css("display","none");
            $("div.ring").css("display","none");
        };
        if (filter === "ear"){
            $("div.all").css("display","none");
            $("div.rings").css("display","none");
            $("div.ear").css("display","block");
            $("div.necklace").css("display","none");
        };
        if (filter === "necklace"){
            $("div.all").css("display","none");
            $("div.rings").css("display","none");
            $("div.ear").css("display","none");
            $("div.necklace").css("display","block");
        };
    });


    $("li.cost").click(function() {
        console.log(this);
        if($(this).hasClass('no')){
            $("div.cost-down").css("display","none");
            $("div.cost-up").css("display","block");
            $("div.all").css("display","none");
            $("div.rings").css("display","none");
            $("div.ear").css("display","none");
            $("div.necklace").css("display","none");
            $(this).html('<a>цeнa</a> <img class="arrow" src="img/up.png">');
            $(this).addClass("up");
            $(this).removeClass("no");
            return;
        }
        if($(this).hasClass('up')){
            $("div.cost-up").css("display","none");
            $("div.cost-down").css("display","block");
            $("div.all").css("display","none");
            $("div.rings").css("display","none");
            $("div.ear").css("display","none");
            $("div.necklace").css("display","none");
            $(this).html('<a>цeнa</a> <img class="arrow" src="img/down.png">');
            $(this).addClass("down");
            $(this).removeClass("up");
            return;
        }
        if($(this).hasClass('down')){
            $("div.cost-up").css("display","none");
            $("div.cost-down").css("display","none");
            $("div.all").css("display","block");
            $("div.rings").css("display","none");
            $("div.ear").css("display","none");
            $("div.necklace").css("display","none");
            $(this).html('<a>цeнa</a>');
            $(this).addClass("no");
            $(this).removeClass("down");
            return;
        }
    });


});
