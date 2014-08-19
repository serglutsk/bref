if (typeof jQuery === 'undefined'){
    var script = document.createElement('script');
    script.src = '/public/js/jquery.js';
    document.getElementsByTagName('head')[0].appendChild(script);
}

function trim(str){
    return str.replace(/^\s+|\s+$/g, '');
}

function forEach(data, callback){
    for(var key in data){
        if(data.hasOwnProperty(key)){
            callback(key, data[key]);
        }
    }
}

function jq_func_exec(id,f,data){
    switch (f)
    {
        case 'html': jQuery(id).html(data);break;
        case 'append': jQuery(id).append(data);break;
        case 'prepend': jQuery(id).prepend(data);break;
        case 'before': jQuery(id).before(data);break;
        case 'after': jQuery(id).after(data);break;
        case 'addClass': jQuery(id).addClass(data);break;
    }
    return true;
}

function ajaxer(p_url, p_data, stealthy){
    stealthy = stealthy || false;
    if(!stealthy)
    {
        ajax_hide();
        jQuery("#loader_box").fadeIn(500);
        jQuery("a").css({cursor:'wait'});
    }
    $.ajax({
        type: "POST",
        url: p_url,
        data: p_data,
        error: function() {
            if(!stealthy){
                alert("Ajax error. Try again later.");
            }
        },
        success: function (data){
            try
            {
                var data = JSON.parse(data);
            }
            catch(e)
            {
                if(!stealthy){
                    alert('invalid json: '+data);
                }
                return false;
            }
            if(data.status)
            {
                if(data.redirect)
                {
                    jQuery("#redirection_box").fadeIn(500);
                    document.location.replace(data.redirect);
                    return true;
                }
                else
                {
                    if(data.message_box_ok)
                    {
                        var message = '';
                        if(data.message_box_ok == "alert")
                        {
                            forEach(data.message, function(key, value) {
                                message = message+value+"\r\n";
                            });
                            message = message.slice(0, -4);
                            alert(message);
                        }
                        else
                        {
                            forEach(data.message, function(key, value) {
                                message = message+value+data.message_box_ok_separator;
                            });
                            message = message.slice(0, data.message_box_err_separator.length*-1);
                            jq_func_exec(data.message_box_ok,data.message_box_ok_method,message)
                            $(data.message_box_ok).fadeIn(500);
                        }
                    }
                }
            }
            else
            {
                if(data.message_box_err)
                {
                    var message = '';
                    if(data.message_box_err == "alert")
                    {
                        forEach(data.message, function(key, value) {
                            message = message+value+"\r\n";
                        });
                        message = message.slice(0, -4);
                        alert(message);
                    }
                    else
                    {
                        forEach(data.message, function(key, value) {
                            message = message+value+data.message_box_err_separator;
                        });
                        message = message.slice(0, data.message_box_err_separator.length*-1);
                        jq_func_exec(data.message_box_err,data.message_box_err_method,message)
                        $(data.message_box_err).fadeIn(500);

                    }
                }
            }
        },
        complete: function() {
            if(!stealthy)
            {
                jQuery("#loader_box").fadeOut(500);
                jQuery("a").css({cursor:'pointer'});
                //jQuery(".ajax").fadeOut(500);
            }
        }
    });
}

function ajax_hide(){
    jQuery(".ajax").fadeOut(500);
}

function support_ticket_add(){
    var form_data = $('#addForm').serialize();
    ajaxer("/ajax/support/ticket/add_ticket/",form_data);
}

function support_ticket_close(id, p_confirm){
    if(confirm(p_confirm))
    {
        var data = {
            ticket_id: id
        }
        ajaxer("/ajax/support/ticket/close_ticket/",data);
    }
}

function support_answer_add(){
    var form_data = $('#addForm').serialize();
    ajaxer("/ajax/support/ticket/add_answer/",form_data);
}

function widget_close(id){
    jQuery("#widget_"+id).fadeOut(500);
    var data = {
        widget_id: id
    }
    ajaxer("/ajax/system/widget/close_widget/",data, true);
}

function widget_add_list(){
    ajaxer("/ajax/system/widget/add_widget_list/",null);
}

function widget_add(id){
    ajax_hide();
    var data = {
        widget_id: id
    }
    ajaxer("/ajax/system/widget/add_widget/",data);
}


function msg_close(id, url)
{
    jQuery("#msg_"+id).fadeOut(500);
    var data = {
        msg_id: id,
        msg_url: url
    }
    ajaxer("/ajax/msg/popup/close/",data, true);
}

function msg_list()
{
    ajaxer("/ajax/msg/popup/list/", null, true);
}


$( document ).ready(function() {
    msg_list();
    setInterval( msg_list, 10000 );
});