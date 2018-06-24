$(document).ready(function(){
  $('.search').mouseenter(
    function(){
      $('.search-label').css('display','block');
    }
  );

  $(window).click(function(e){
    $('.search-label').css('display','none');
  });

$('.search-label').click(function(e){
   e.stopPropagation();
})



});
