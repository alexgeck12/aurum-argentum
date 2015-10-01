$( document ).ready(function() {

    $("#submit-form").click(function() {

        if( $("#name").val().length == 0 ||
            $("#email").val().length == 0 ||
            $("#phone").val().length == 0 ||
            $("#message").val().length == 0
        ){
            alert('Заполните все поля');
        }else{

            if( emailValidation() === true){
                var form = {};
                form.name = $('#name').val();
                form.email = $('#email').val();
                form.phone = $('#phone').val();
                form.message = $('#message').val();
                form._token = $('input[name="_token"]').val();

                $.ajax({
                    type: "POST",
                    url: "./contacts",
                    data: form,
                    dataType: "text",
                    success: function(data)
                    {
                        alert(data);
                    }
                });

                $('#contact-form')[0].reset();
                return false;
            }else{
                alert('Введите корретктный email');
            }
        }
    });

    function emailValidation(){

            var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
            if (filter.test($("#email").val())) {
                return true;
            }
            else {
                return false;
            }

    };

});