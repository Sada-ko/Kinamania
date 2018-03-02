/**
 * Created by Sada-Mac on 24/09/17.
 */

$(document).ready(function () {

    //Выпадающее меню
    $('.dropdown-toggle').dropdown({
        flip: false
    });


    //Owl Carousel
    $(".videos-list.owl-carousel").owlCarousel({
        nav: true,
        navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right ml-3' aria-hidden='true'></i>"],
        autoWidth:true,
        margin: 20
    });



    /* jQuery FillBox v1.0.0 */
    (function ($, window, document) {
        $.fn.fillBox = function() {

            this.each(function(){
                var el = $(this),
                    src = el.attr('src'),
                    parent = el.parent();

                parent.css({
                    'background-image'    : 'url(' + src + ')',
                    'background-size'     : 'cover',
                    'background-position' : 'center'
                });

                el.hide();
            });
        };
    }(jQuery, window, document));

});
