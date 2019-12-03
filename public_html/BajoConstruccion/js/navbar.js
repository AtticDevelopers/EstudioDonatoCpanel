$(document).ready(function(){
    $(".navbar > ul > li").click(function () {
          $(this).siblings().removeClass("active");
          $(this).addClass("active");
    });
})