$(document).ready(function(){

    $('.login-nav').animate({
        width : '300px',
        height : 'show'
    }, 900, function(){
        $('.login-nav ul').animate({opacity:'1'}, 500)
    }
    );

    
    $('.login-nav ul li').on('click',function(){
        $('.shoose_one'). slideToggle('500');
    });

    $('.shoose_one').hover(
    function(){
        $(this).css({
            backgroundColor : '#273c75',
            color : '#fff'
        });
    },
    function(){
        $(this).css({
            backgroundColor : 'rgba(255, 255, 255,1.0)',
            color : '#000'
        });
    }
    );

    $('.selected-one').on('click', function(){
        $('.login-nav').slideUp(900);
        if ($(this).attr('data-class') == 'patient') {
          $('.patient').slideDown(900);
        } 

        if ($(this).attr('data-class') == 'doctor') {
            $('.doctor').slideDown(900); 
        }

        if ($(this).attr('data-class') == 'laboratoire') {
            $('.laboratoire').slideDown(900); 
        }

    });

    // afficher les termes
    $('.terme_butt').on('click', function(){
        $('.termes').slideDown();
    });

    $('.fa-times-circle').on('click', function(){
        $('.termes').slideUp();
    });

    // hide form on click 
    $('.close-form').on('click', function(){
        $('.myform').slideUp(900);
        $('.login-nav').show(900);
    });

});