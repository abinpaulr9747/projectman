/**
 * Created by My Profile on 30/7/14.
 */


$('body').on('click','.pagination a',function(){

    var myurl = $(this).attr('href');

    event.preventDefault();

    $.ajax(
        {
            url: myurl,
            type: "get",
            datatype: "html",
            beforeSend: function()
            {
                $("#ajax-paginate-content").empty();
                $('#ajax-loading').show();
            }
        })
        .done(function(data)
        {
            $('#ajax-loading').hide();
            $("#ajax-paginate-content").empty().html(data.html);
        })
        .fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('No response from server');
        });
    return false;

});