$(document).ready(function() {
    $("img.lazy").lazyload({
        effect : "fadeIn"
    });

    FB.getLoginStatus(function(response) {
        if (response && response.status === 'connected'){
            FB.Event.subscribe('edge.create', function(url, html_element) {
                if (url === 'https://www.facebook.com/NonProfitTest'){
                    var request = $.ajax({
                        url: "/likes",
                        type: "POST",
                        data: { "value": true }
                    });

                    request.done(function (res, textStatus, jqXHR){
                        if (res.status = "ok"){
                            $( ".select_like" ).fadeOut( "fast", function() {
                                $( ".container_notlike").fadeIn( "fast");
                            });
                        }
                    });
                }
            });
        }
        else {
            console.log('not logged in');
        }
    }, true);
});