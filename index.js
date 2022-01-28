$(document).ready(function(){
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
});


