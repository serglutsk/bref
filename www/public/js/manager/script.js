$(document).ready(function() {

    $('ul.project-status li a').on('click', function(){
        $('ul.project-status li a').removeClass('active-item');
        $(this).addClass('active-item');

        if (this.id === 'all'){
            $('section.content section').show();
        }
        else {
            $('section.content section').hide();
            $('section.' + this.id).show();
        }
        return false;
    })

    $('ul.show-project li').on('click', function(){
        if ($(this).hasClass('button')){
            $(this).closest('ul.show-project').find('li').removeClass('active-item');
            $(this).addClass('active-item');

            var data = {
                count: $(this).data('value'),
                status: $(this).closest('section').attr('class')
            }
            $(this).closest('section').find('.site-status').remove();
            ajaxer('/ajax/manager/manager/load', data);
        }
    })

    $('section.content').on('click','ul.site-status', function(){
        $('div.request-info').slideUp();
        if (!$(this).find('div.request-info').is(':visible')) {
            $(this).find('div.request-info').slideDown();
        }
    })

    $('section.content').on('click', 'div.request-info', function(){
        return false;
    })

    $('section.content').on('click', 'span.show-detail', function(){
        $(this).closest('.show-details').find('div.show-detail').slideToggle();
    })

    $('section.content').on('click', 'span.close', function(){
        $(this).closest('div.request-info').slideUp();
    })
    $('section.content').on('click', '.informatione li.big-width', function(){
        $(this).closest('.informatione').find('.detail-information').slideToggle();
    })


    $('section.content').on('click', '.submit-notice', function(){

        var brief = $(this).closest('.request-info');

        var url = '/ajax/manager/manager/set_price';
        var data = {
            dev_price: brief.find('input[name="dev_price"]').val(),
            design_price: brief.find('input[name="design_price"]').val(),
            total_price: brief.find('input[name="total_price"]').val(),
            hash: brief.find('input[name="hash"]').val()
        }

        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function (data){
                var data = JSON.parse(data);

                if (data.status) {
                    // todo: success chanched
                }
                else {
                    // todo: throw error
                }
            }
        });

        return false;
    })

    $('section.content').on('click', '.submit-subject-info', function(){

        var brief = $(this).closest('.request-info');

        var url = '/ajax/manager/manager/approve_brief';
        var data = {
            hash: brief.find('input[name="hash"]').val()
        }

        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function (data){
                var data = JSON.parse(data);

                if (data.status) {
                    // todo: success chanched
                }
                else {
                    // todo: throw error
                }
            }
        });

        return false;
    })

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

$(function(){
    $('section.content').on('click', '.menu-creator', function(){
    })
    $('section.content').on('click', 'a.plus', function(){
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
    $('section.content').on('click', 'a.delete', function(){
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
    $('section.content').on('click', 'a.add', function(){
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

    $('#lang_q').on('change',function(){
        var lang=$('#lang_q').val();


        $.ajax({
            type: "POST",
            url: "/ajax/system/auth/lang",
            data: {lang:lang},
            success: function(){

                window.location.reload();
            }
        });

    })


})