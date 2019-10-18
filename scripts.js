function load_ajax_posts(target,post_id,adminurl) {
    var $content = $('.compare-tables');
    var $loader = $('select.car-selector');


    if (!$loader.hasClass('post_loading_loader')) {
        $.ajax({
            type: 'POST',
            dataType: 'html',
            url: adminurl,
            data: {
                'post_id': post_id,
                'action': 'klunker_more_post_ajax'
            },
            beforeSend : function () {
                $content.addClass('post_loading_loader').html('');
            },
            success: function (data) {
                $('#'+target).empty();
                if (data.length) {
                    $('#'+target).append(data);
                    $content.removeClass('post_loading_loader');
                } else {
                    $content.removeClass('post_loading_loader').addClass('post_no_more_posts').html('');
                }
            },
            error : function (jqXHR, textStatus, errorThrown) {
                //$content.html($.parseJSON(jqXHR.responseText) + ' :: ' + textStatus + ' :: ' + errorThrown);
                console.log('Error');
                console.log(jqXHR);
            },
        });
    }
    return false;
}

+function ($) {

    $("figure.compare-table").each(function () {
        $("#auto_select_2").find($("select")).attr("disabled","disabled");
    });

    $("select.car-selector").change(function () {
        $("select.car-selector").removeAttr("disabled");
        var target = $(this).parent().attr("data-target");
        var post_id = $(this).val();
        var adminurl = $(this).data("admin-url");
        if (post_id != 0) { load_ajax_posts(target,post_id,adminurl); }
    });

}(jQuery);
