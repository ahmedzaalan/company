// JavaScript source code
jQuery(document).ready(function () {
    $('.carousel').carousel({
        interval: 3000
    });
    $('.cog-check').click(function () {
        $('.color-option').fadeToggle();
    });

    // color-option-box
    var colorli = $(".color-option ul li");
    colorli
        .eq(0).css("backgroundColor", "#E41B17").end()
        .eq(1).css("backgroundColor", "#9d220f").end()
        .eq(2).css("backgroundColor", "#d522c0").end()
        .eq(3).css("backgroundColor", "#2252d5")
    colorli.click(function () {
        $("link[href*='theme']").attr("href", $(this).attr("data-value"));
    });



    // scroll button
    var scrollButton = $("#scroll-top")

    $(window).on("scroll", function () {
        console.log($(this).scrollTop());

        if ($(this).scrollTop() >= 700) {
            scrollButton.show();
        }
        else {
            scrollButton.hide();
        }

        scrollButton.click(function () {
            $("html,body").stop().animate({ scrollTop: 0 }, 600);
        });
    });
});
// loading screen

$(window).on('load', function () { $(".loading-overlay,.loading-overlay.loader").fadeOut(2000); });