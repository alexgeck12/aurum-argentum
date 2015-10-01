$( document ).ready(function() {
    $("#minsk").click(function() {
        $(".minsk-map").css("display","block");
        $(".brest-map").css("display","none");
    });
    $("#brest").click(function() {
        $(".minsk-map").css("display","none");
        $(".brest-map").css("display","block");
    });
});
