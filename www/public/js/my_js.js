/**
 * Created by Юзер on 18.08.14.
 */

$(document).ready(function()
    {
$('#link_create').on('click',function(){
    $.ajax({
        type: "POST",
        url: "/ajax/system/auth/link",

        success: function(msg){

//            $('#l_link').text('<a href="http://bref/request?ref='+msg+'" ></a>')
            $('#l_link').text('http://bref/request?ref='+msg)
        }
    });

})

});
