
// show full list
$(".list__more").on("click", function() {
    var list = $(this).siblings(".page-block-1-list");
    var items = list.find(".page-block-1-list__item");

    $(this).find("svg").toggleClass("list__more_revers");
    for(var i = 10; i < items.length; i++) {
        $(items[i]).slideToggle();
    }
});
// end show full list
