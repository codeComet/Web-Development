$(document).ready(function(){
  $('.vertical-menu a').on('click', function(){
    $('.vertical-menu a').removeClass('active');
    $(this).addClass('active');
  });

  var x = $('.navbar').css('display');
  if (x == 'block') {
    $(".col-md-9").css({"position": "absolute", "top": "65px"})
  }

  $('.navbar-nav a').on('click', function(){
    $('.navbar-toggler').addClass('collapsed');
    $('.navbar-collapse').removeClass('show');
    var ids = $(this).attr('href');
    //alert(ids);
    $(ids+"> h1").css({"padding-top": "60px"})
  });
});

