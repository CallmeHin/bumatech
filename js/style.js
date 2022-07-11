/* BEGIN s-header-6 */
$(document).ready(function(){
    // Tính toàn chiều dài của menu cấp con
    var li = $('.s-header-6 ul[ht-target="hd-menu"] li ul').parent();
    for (var i = 0; i < li.length; i++) {
        $(li[i].lastElementChild).css('width', $(li[i].lastElementChild).outerWidth());
    }
    li.removeClass('no-hover');
    li.children('a').unbind('click');
    if (window.innerWidth < 992) {
        li.addClass('no-hover');
        li.children('a').click(function(e) {
            e.preventDefault();
            li.not($(this).parent()).addClass('no-hover');
            $(this).parent().toggleClass('no-hover');
        });
    }
    $('.s-header-6 [ht-trigger="hd-search"]').click(function() {
        $(this).parent().children().toggleClass('is-active');
    });
    $('.s-header-6 [ht-trigger="hd-menu"]').click(function() {
        $(this).parent().find('[ht-target="hd-menu"], .fa-transformation').toggleClass('is-active');
    });

    $('.watermark').watermark({
        path: 'http://i.imgur.com/h0trtqE.jpg',
        margin: 0,
        gravity: 'ne',
        opacity: 0.5,
        outputWidth: 400
    });
});
/* END s-header-6 */
