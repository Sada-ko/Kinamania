/**
 * Created by Sada-Mac on 24/09/17.
 */
/*
    Функция распарсит урлд видео и вирнет его ID
*/
function YouTubeGetID(url){
  var ID = '';
  url = url.replace(/(>|<)/gi,'').split(/(vi\/|v=|\/v\/|youtu\.be\/|\/embed\/)/);
  if(url[2] !== undefined) {
    ID = url[2].split(/[^0-9a-z_\-]/i);
    ID = ID[0];
  }
  else {
    ID = url;
  }
    return ID;
}
jQuery(document).ready(function () {
    // Обработка ссылки на видео
    jQuery('.youtube_video_link').hide();
    var youtube_link = jQuery('.youtube_video_link > span > a').text();
    youtube_video_id = YouTubeGetID(youtube_link);




    //Выпадающее меню
    jQuery('.dropdown-toggle').dropdown({
        flip: false
    });


    //Owl Carousel
    jQuery(".videos-list.owl-carousel").owlCarousel({
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
        $('.fill-box').fillBox();
    }(jQuery, window, document));

});
