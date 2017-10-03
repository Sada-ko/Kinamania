/**
 * Created by Sada-Mac on 24/09/17.
 */

$(document).ready(function () {

    //Выпадающее меню
    $('.dropdown-toggle').dropdown({
        flip: false
    });


    //Owl Carousel
    $(".videos-list").owlCarousel({
        nav: true,
        navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right ml-3' aria-hidden='true'></i>"],
        autoWidth:true,
        margin: 20
    });

    /*$("#scroll-menu").owlCarousel({
        //nav: true,
        navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right ml-3' aria-hidden='true'></i>"],
        autoWidth:true,
        margin: 0
    });*/

});
