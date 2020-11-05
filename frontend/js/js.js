
$(function () {
    $('.icon-search').click(function () {
        $('.search__small--input').fadeIn(300);
        $('.header__none').attr('style', 'display: none');
        $('.search__small--input').attr('style', 'display: block');
    });
});

$(function () {
    $('.back__header--title').click(function () {
        $('.header__none').fadeIn(300);
        $('.header__none').attr('style', 'display: block');
        $('.search__small--input').attr('style', 'display: none');
    });
});


$(function () {
    $('.menu-item').click(function () {
        if ($(this).hasClass('active')) {
            $(this).children('.menu-list').slideUp(300);
            $('.menu-item').removeClass('active');
        }
        else {
            $('.menu-list').slideUp(300);
            $(this).children('.menu-list').slideDown(300);
            $('.menu-item').removeClass('active');
            $(this).addClass('active');

        }
    })
});