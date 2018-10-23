$(document).ready(function () {


    $(".clicka1").click(function () {
        $(".clicka1").css("display", "none");
        $(".clicka2").css("display", "block");
        $(".clickc1").css("display", "block");
        $(".clickc2").css("display", "none");
        $(".clickb1").css("display", "block");
        $(".clickb2").css("display", "none");
        //back-ground-color

        $('.backgroud-heading1').css('background-color', '#106eaa');
        $('.backgroud-heading2').css('background-color', 'white');
        $('.backgroud-heading3').css('background-color', 'white');
        //color
        $('.text1').css('color', 'white');
        $('.icona').css('color', 'white');

        $('.text2').css('color', '#666');
        $('.b2').css('color', '#666');
        $('.clickb1').css('color', '#666');

        //css c3
        $('.text3').css('color', '#666');
        $('.c3').css('color', '#666');
        $('.clickc1').css('color', '#666');

    });
    $(".clicka2").click(function () {

        $(".clicka2").css("display", "none");
        $(".clicka1").css("display", "block");
        $(".clickc1").css("display", "block");
        $(".clickc2").css("display", "none");
        $(".clickb1").css("display", "block");
        $(".clickb2").css("display", "none");
        $('.clicka1').css('color', 'white');
//icon  
        $('.text2').css('color', '#666');
        $('.b2').css('color', '#666');





    });
    $(".clickb1").click(function () {
        $(".clickb1").css("display", "none");
        $(".clickb2").css("display", "block");
        $(".clicka1").css("display", "block");
        $(".clicka2").css("display", "none");
        $(".clickc1").css("display", "block");
        $(".clickc2").css("display", "none");
        //back-ground-color
        $('.backgroud-heading1').css('background-color', 'white');
        $('.backgroud-heading2').css('background-color', '#106eaa');
        $('.backgroud-heading3').css('background-color', 'white');
        //icon
        $('.text1').css('color', '#666');
        $('.icona').css('color', '#666');
        //iconb
        $('.clicka1').css('color', '#666');

        $('.text2').css('color', 'white');
        $('.b2').css('color', 'white');
        $('.clickb1').css('color', 'white');
        //css c3
        $('.text3').css('color', '#666');
        $('.c3').css('color', '#666');
        $('.clickc1').css('color', '#666');


    });
    $(".clickb2").click(function () {
        $(".clickb2").css("display", "none");
        $(".clickb1").css("display", "block");
        $(".clicka1").css("display", "block");
        $(".clicka2").css("display", "none");
        $(".clickc1").css("display", "block");
        $(".clickc2").css("display", "none");
        //css


    });
    $(".clickc1").click(function () {
        $(".clickc1").css("display", "none");
        $(".clickc2").css("display", "block");
        $(".clickb1").css("display", "block");
        $(".clickb2").css("display", "none");
        $(".clicka1").css("display", "block");
        $(".clicka2").css("display", "none");
        $('.backgroud-heading2').css('background-color', 'white');
        $('.backgroud-heading3').css('background-color', '#106eaa');
        $('.backgroud-heading1').css('background-color', 'white');
        //css hading1 
        $('.text1').css('color', '#666');
        $('.icona').css('color', '#666');
        $('.clicka1').css('color', '#666');
        //css hading2 
        $('.text2').css('color', '#666');
        $('.b2').css('color', '#666');
        $('.clickb1').css('color', '#666');
        //css c3
        $('.text3').css('color', 'white');
        $('.c3').css('color', 'white');
        $('.clickc1').css('color', 'white');
    });
    $(".clickc2").click(function () {
        $(".clickc2").css("display", "none");
        $(".clickc1").css("display", "block");
        $(".clickb1").css("display", "block");
        $(".clickb2").css("display", "none");
        $(".clicka1").css("display", "block");
        $(".clicka2").css("display", "none");
        //css3
        $('.text3').css('color', 'white');
        $('.c3').css('color', 'white');
        $('.clickc1').css('color', 'white');

    });
    $(document).ready(function ()
    {
        $('.fluid-question-li-1').click(function () {
            $('.fluid-question li').removeClass('active-li');
            $(this).addClass('active-li');
            $('.text-li1').slideDown();
            $('.text-li2').slideUp();
        });
        $('.fluid-question-li-2').click(function () {
            $('.fluid-question li').removeClass('active-li');
            $(this).addClass('active-li');
            $('.text-li2').slideDown();
            $('.text-li1').slideUp();
        });
    }
    );
});
