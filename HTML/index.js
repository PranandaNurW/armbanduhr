$(document).ready(function(){
 
    //banner owl carousel
// $("#banner-area .owl-carousel").owlCarousel({
//     dots: true,
//     items: 1
// });

    //men owl carousel

var $owl = $('#top-sale .owl-carousel');
$owl.trigger('destroy.owl.carousel');
$owl.html($owl.find('.owl-stage-outer').html()).removeClass('owl-loaded');
$owl.owlCarousel({
        margin: 10,
        loop: true,
        nav : true,
        dots : false,
        responsive : {
            0: {
                items : 1
            },
            500 : {
                items : 2
            },
            700 : {
                items : 3
            },
            1000 : {
                items : 4
            },
            1200 : {
                items : 5
            }
        }
    });

    //product quantity
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
//    let $input = $(".qty .qty_input");

    //plus
    $qty_up.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val() >= 1 && $input.val() <= 4){
            $input.val(function(i, oldval){
                return ++oldval;
            });
        }
    });
    //minus
    $qty_down.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val() > 1 && $input.val() <= 5){
            $input.val(function(i, oldval){
                return --oldval;
            });
        }
    });

    
});

