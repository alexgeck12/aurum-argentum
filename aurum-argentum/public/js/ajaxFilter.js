$( document ).ready(function() {
    $("input").click(function() {


        var dataFilter = {};
        dataFilter._token = $('input[name="_token"]').val();

        if($( "#material" ).val() == 'Серебро'){

            filter = $( "input:checked" ).val();
            dataFilter.item = filter;
            $.ajax({
                type: "POST",
                url: "./silver",
                data: dataFilter,
                dataType: "text",
                success: function(data)
                {
                    var b = data.split('<!-- Content -->')[1];
                    var a = b.split('<!-- End Content -->')[0];
                    $(".all").replaceWith( a );
                    var divs = $("div.grid_4");
                    for(var i = 0; i < divs.length; i+=3) {
                        divs.slice(i, i+3).wrapAll("<div class='row'></div>");
                    }
                }
            });

        }

        if($( "#material" ).val() == 'Золото'){

            filter = $( "input:checked" ).val();
            dataFilter.item = filter;
            $.ajax({
                type: "POST",
                url: "./zoloto",
                data: dataFilter,
                dataType: "text",
                success: function(data)
                {
                    var b = data.split('<!-- Content -->')[1];
                    var a = b.split('<!-- End Content -->')[0];
                    $(".all").replaceWith( a );
                    var divs = $("div.grid_4");
                    for(var i = 0; i < divs.length; i+=3) {
                        divs.slice(i, i+3).wrapAll("<div class='row'></div>");
                    }
                }
            });

        }

        if($( "#material" ).val() == 'РAСПРОДAЖA'){

            filter = $( "input:checked" ).val();
            dataFilter.item = filter;
            $.ajax({
                type: "POST",
                url: "./discont",
                data: dataFilter,
                dataType: "text",
                success: function(data)
                {
                    var b = data.split('<!-- Content -->')[1];
                    var a = b.split('<!-- End Content -->')[0];
                    $(".all").replaceWith( a );
                    var divs = $("div.grid_4");
                    for(var i = 0; i < divs.length; i+=3) {
                        divs.slice(i, i+3).wrapAll("<div class='row'></div>");
                    }
                }
            });

        }

    });

});