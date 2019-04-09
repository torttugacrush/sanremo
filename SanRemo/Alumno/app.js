jQuery(document).ready(function($){
    $("a").click(function(evemt){
        link=$(this).attr("href");
        $.ajax({
            url: link,
        })
        .done(function(html){
            $("#page").emty().append(html);
        })
        .fail(function(){
            console.log("error");
        })
        .always(function(){
            console.log("complete");
        });
        return false;
    });

});