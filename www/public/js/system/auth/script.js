$(document).ready(function(){
    /*$('#show_form').bind('click', function(){
        $('.login-form').slideDown('slow');
    });
    $('.close-button').bind('click', function(){
        if ($('.login-form').is(':visible')){
            $('.login-form').slideUp('slow');
        }
    })*/
    $('button.login-site').bind('click', function(){

        $('input.login-field').removeClass('error');

        var url = '/ajax/system/auth/login';
        var data = {
            login: $('input[name="login"]').val(),
            password: $('input[name="password"]').val(),
            remember: $('input[name="remember"]').is(':checked')
        }

        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function (data){
                var data = JSON.parse(data);

                if (data.status) {
//                    alert(data.status)
                    document.location.replace(data.redirect);
                }
                else {
                    if (data.message.incorrect){
                        $('input.login-field').addClass('error');
                    }
                    else if (data.message.login){
                        $('input[name="login"]').addClass('error');
                    }
                    else if (data.message.password){
                        $('input[name="password"]').addClass('error');
                    }
                }
            }
        });

        return false;
    })
});