$(document).ready(function () {
    var $currentCat = 2;
    var $currentSubCat = Number(2.3);
    var $aux = ($currentSubCat + "").split(".")[1];
    $("ul." + $currentCat).show();
    $("li." + $currentCat + "-" + $aux).find("a").addClass("active");
    $("aside.grid > ul h2 a").click(function () {
        if ($(this).parent("h2").next("ul").is(":not(:visible)")) {
            $("aside.grid > ul h2 a").removeClass("active");
            $("aside.grid > ul ul:visible").slideToggle("slow");
            $(this).parent("h2").next("ul").slideToggle("slow");
            $(this).toggleClass("active");
        }
    });
});
