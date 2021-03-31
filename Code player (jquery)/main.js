function updateOutput() {
  $("iframe").contents().find("html").html(("<html><head><style type='text/css'>"+
  $("#cssPanel").val()+"</style></head><body>"+$("#htmlPanel").val()+"</body></html>"));

  document.getElementById("outputPanel").contentWindow.eval($("#jsPanel").val());
}


$(".btngrp").hover(function() {
  $(this).addClass("highlighted")
  $(this).css( "cursor", "pointer");
}, function(){
  $(this).removeClass("highlighted");
})

$(".btngrp").click(function() {
  $(this).toggleClass("active");
  $(this).removeClass("highlighted");
  var panel = $(this).attr("id")+"Panel";
  $("#"+panel).toggleClass("hidden");
  var numOfActivePanel= 4 - $(".hidden").length
  $(".panel").width(($(window).width() / numOfActivePanel) - 10);
})

$(".panel").height($(window).height() - $(".header").height() - 5);
$(".panel").width(($(window).width() / 2) - 10);

updateOutput();


$("textarea").on('change keyup paste', function(){
  updateOutput();
})