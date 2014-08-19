function nextSection(obj){
    obj.closest('section').removeClass('current').addClass('finish').next('section').removeClass('next').addClass('current');

    obj.closest('section').find('.cmpl').addClass('yes');

    obj.closest('section').find('.cont').slideUp();
    obj.closest('section').next().find('.cont').slideDown(function(){

        if($(this).closest('section').next().is('section')){
            $(this).closest('section').next().addClass('next');
        }

        if($(this).find('.select.current').length){
            _select = $(this).find('.select.current').removeClass('current').addClass('finish').find('.toggle').attr('checked', 'checked');
            if(_select.end().next().is('.select')){
                _select.end().next().addClass('next');
            }
        }

        $(window).scrollTo(obj.closest('section').next().get(0), {
            duration: 400,
            offset: {top: -10}
        });

    });
}

function validateForm(){
    var error = false;
    $('.contacts input').each(function(){
        if( $(this).hasClass('email') && !$(this).val().match(/^S+@\S+\.S{2,}$/) ||
            $(this).hasClass('phone') && $(this).val().length < 8 ||
            $(this).hasClass('nome') && $(this).val().length < 2 ||
            $(this).hasClass('cognome') && $(this).val().length < 2
            ){
                $(this).addClass('error');
                error = true;
        }
    });
    return error;
}

$(function(){

    $('#country_italy').change(function(){

        nextSection($(this));

        if($(this).is(':checked')){
            $(this).closest('.cnt-bl').find('.select').removeClass('current').find('> input').prop('checked', false);
        }else{
            $(this).closest('.cnt-bl').find('.select').addClass('current').find('> input').prop('checked', true);
        }
    })

    //color section
    $('.select li.color label').click(function(e){
        var color_count = 0;
        $(this).closest('ul').find('input').each(function(){
            if($(this).is(':checked')){
                color_count++;
            }
        });

        console.log(color_count)

        if(color_count >= 5 && !$(this).parent().find('input').is(':checked')){
            e.preventDefault();
        }


    });

    $('#main section.sect-21 input[type=radio]').change(function(){
        if( $('input[name=old_site]').is(':checked') &&
            $('input[name=need_host]').is(':checked')
        ){
            if( ($('#old_site_yes').is(':checked') && $('#old_site_value').val().length > 9) ||
                !$('#old_site_yes').is(':checked')
                ){
                nextSection($(this))
            }
        }
    });

    $('#old_site_yes, #old_site_no').click(function(e){
        if($('#old_site_yes').is(':checked')){
            $('#old_site_value').fadeIn(300);
        }else{
            $('#old_site_value').fadeOut(300);
        }
    })

    $('#need_host_yes + label, #need_host_no + label').click(function(e){
        if( ($('#old_site_yes').is(':checked') && $('#old_site_value').val().length < 9)){
            $('#old_site_value').css('border-color', 'red');
            e.preventDefault();
            return false;
        }else{
            $('#old_site_value').css('border-color', '#cbcbcb');
        }
    })

    $('.select:not(.colorized) .select-option').click(function(){
        $(this).closest('.select').find('.toggle').removeAttr('checked');
        _val = $(this).find('label').text();
        $(this).closest('.select').find('> label').text(_val);
    });

    $('section .head').click(function(e){

        if(!$(e.target).is('.head') || (!$(this).parent().hasClass('current') && !$(this).parent().hasClass('finish')))
            return false;

        $(this).parent().prev().find('.cont').slideUp();

        if($(this).parent().find('.cont:visible').length){
            $(this).parent().find('.cont').slideUp();
        }else{
            $(this).parent().find('.cont').slideDown();
        }
    })

    $('.select').click(function(){
        if(!$(this).hasClass('current') && !$(this).hasClass('finish'))
            return false;
    })

    $('input[type=submit]').click(function(){

        if(validateForm()){
            alert();
        }

    })

    $('.select > ul > .select-option > input').change(function(){
        $(this).closest('.select').removeClass('current').addClass('finish');

        next = $(this).closest('.select').next();

        if(next.is($('.select'))){
            if(!next.hasClass('finish')){
                next.addClass('current');
                next.removeClass('next');
                next.find('.toggle').attr('checked', 'checked');

                if(next.next().is('.select')){
                    next.next().addClass('next');
                }

            }
        }else{
            if($(this).closest('section').hasClass('single')){
                nextSection($(this));
            }
        }
    });

    $('.text-field input[type=text]').keyup(function(){
        $(this).parent().find('input[type=checkbox]').attr('checked', 'checked')
    })

    $('#company_slogan_yes, #company_slogan_no').change(function(){
        if($('#company_slogan_yes').is(':checked')){
            $('#company_slogan_value').fadeIn(300)
        }else{
            $('#company_slogan_value').fadeOut(300)
        }
    })

    $('.next-sect').click(function(e){
        e.preventDefault();

        var error = false
        if($(this).attr('rel') == 'validate'){
            $(this).parent().find('input[type=text]:visible').each(function(){
                if(!$(this).val().length){
                    error = true;
                    $(this).css('border-color', 'red')
                }else{
                    $(this).css('border-color', '')
                }
            })
        }

        if(!error)
            nextSection($(this));

    })

    $('#wrapper .bl > input, #app_ios, #app_android').on('change', function(){
        if($(this).closest('section').hasClass('single')){
            nextSection($(this));
        }
    })

    $('.blocks .inner').click(function(){
        type = $(this).closest('.blocks').hasClass('single') ? 'single' : 'multi';
        if(type === 'single'){$(this).closest('.blocks').find('.inner').removeClass('active')}
        $(this).toggleClass('active');
    })

    $('section.sect-1 .checks label').click(function(){
        if($('#app_ios:checked') || $('#app_android:checked')){
            $('#interes-2').attr('checked', 'checked');
        }
    });

    $('.menu-creator').on('click', 'a.plus', function(){
        if(!$(this).parent().next('.subsection').length && $(this).parents('.subsection').length < 2){
            var html = '<div class="subsection">' +
                '<div class="razdel sub">' +
                '<a href="javascript:void(0)" class="delete">×</a>' +
                '<input type="text" placeholder="'+_lang.placeholder+'">' +
                '<a href="javascript:void(0)" class="plus">+</a>' +
                '</div>' +
                '<a class="add sub" href="javascript:void(0)">'+_lang.add_section+'</a>' +
                '</div>';
            $(this).parent().after(html)
        }

    });
    $('.menu-creator').on('click', 'a.delete', function(){
        $(this).parent().fadeOut(0, function(){
            $(this).next('.subsection').remove();
            console.log($(this).closest('.subsection').find('.razdel').length)
            if($(this).closest('.subsection').find('.razdel').length == 1){
                $(this).next('a.add.sub').remove();
            }
            $(this).remove();
            $('.menu-creator > .razdel .pos').each(function(i){
                var _pos = i+1;
                $(this).text(i);
                var  name = $(this).next().attr('name').replace(/menu\[(\d+)\]\[(\d+)\]/, function(str, p1, p2){
                    return 'menu['+_pos+']['+p2+']'
                });
                $(this).next().attr('name', name);
            })
        })
    });
    $('.menu-creator').on('click', 'a.add', function(){
        if(!$(this).hasClass('sub')){
            var len = $('.menu-creator > .razdel:not(.sub)').length + 1;
            var html = '<div style="display: none;" class="razdel parent">'+
                '<a href="javascript:void(0)" class="delete">×</a>'+
                '<div class="pos">'+len+'</div>'+
                '<input type="text" name="menu['+len+'][0]" placeholder="'+_lang.placeholder+'">'+
                    '<a href="javascript:void(0)" class="plus">+</a>'+
                '</div>';
        }else{
            var len = $(this).parent().children('.razdel').length;
            var html = '<div style="display: none;" class="razdel sub">'+
                '<a href="javascript:void(0)" class="delete">×</a>'+
                '<input name="menu['+parent+']['+len+']" type="text" placeholder="'+_lang.placeholder+'">'+
                    '<a href="javascript:void(0)" class="plus">+</a>'+
                '</div>';
        }

        $(this).before(html).prev().fadeIn(300);

    })

    $('input.competitors_name, input.competitors_url').keyup(function(){
        $parent = $(this).closest('.ans_block');
        if($parent.find('.competitors_name').val().length && $parent.find('.competitors_url').val().match(/^http\:\/\/\S+\.\S{2,}/i)){
            $parent.find('.textarea').slideDown()
        }else{
            $parent.find('.textarea').slideUp()
        }
    })

})

$(document).ready(function(){
    $('#send-request').on('click', function(e){

        var arr = [];

        $('.menu-creator .parent').each(function(){
            arr.push({
                'IDmenu': arr.length,
                'IDparent': '0',
                'title': $(this).find('input[type=text]').val()
            });
            save_menu_item($(this), arr, arr.length - 1);
        })
        $('#created-menu').val(JSON.stringify(arr));
        $('form').submit();
    })
})

function save_menu_item(el, arr, parent){
    if (el.next().hasClass('subsection')){
        el.next().children('.razdel.sub').each(function(){
            arr.push({
                'IDmenu': arr.length,
                'IDparent': parent,
                'title': $(this).find('input[type=text]').val()
            });
            save_menu_item($(this), arr, arr.length - 1);
        });
    }
}