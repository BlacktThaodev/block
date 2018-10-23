$(document).ready(function () {
    $('.menu-father2').click(function () {
        $(".menu-brother2").css("display", "block");
        $(".menu-father2").css("display", "none");
        $(".about-menu1").css("display", "none");
        $(".father-services2").css("display", "none");
        $(".gallayry-menu1").css("display", "none");
        $(".blog-menu1").css("display", "none");
        $(".contact-menu1").css("display", "none");
    });
    $('.back-home').click(function () {

        $('.menu-brother2').css("display", "none");
        $('.menu-father2').css("display", "block");
        $(".about-menu1").css("display", "block");
        $(".father-services2").css("display", "block");
        $(".gallayry-menu1").css("display", "block");
        $(".blog-menu1").css("display", "block");
        $(".contact-menu1").css("display", "block");
    });
    $('.father-services2').click(function () {
        $('.menu-services2').css('display', 'block');
        $(".menu-father2").css("display", "none");
        $(".about-menu1").css("display", "none");
        $(".father-services2").css("display", "none");
        $(".gallayry-menu1").css("display", "none");
        $(".blog-menu1").css("display", "none");
        $(".contact-menu1").css("display", "none");
        $(".menu-father2").css("display", "none");
      
  $(".menu-services2").css("margin-top", "-15px");

    });
    $('.back-sevices').click(function () {
        $('.menu-services2').css('display', 'none');
        $('.menu-father2').css("display", "block");
        $(".about-menu1").css("display", "block");
        $(".father-services2").css("display", "block");
        $(".gallayry-menu1").css("display", "block");
        $(".blog-menu1").css("display", "block");
        $(".contact-menu1").css("display", "block");


    });
});