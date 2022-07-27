$(function () {
    $(document).scroll(function () {
        var $nav = $("#mainNav");
        $nav.toggleClass("change", $(this).scrollTop() > $nav.height());
        $nav.removeClass("unchanged", $(this).scrollTop() > $nav.height());
        $nav.toggleClass("unchanged", $(this).scrollTop() < $nav.height());
    });
});