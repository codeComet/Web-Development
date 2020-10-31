var shape = document.getElementById("shape");
var txt = document.getElementById("timer");
var startTime = new Date().getTime();
function randomColor() {
  var letter = "0123456789ABCDEF".split('');
  var color = "#";
  for(var i = 0; i<6; i++){
    color += letter[Math.floor(Math.random() * 16)]
  }
  return color;
}

function makeShapeAppear() {
  var randomWidth = Math.random() * 250 + 50;
  var top = Math.random() * 450;
  var left = Math.random() * 1250;


  if(Math.random()>0.5){
    shape.style.borderRadius = "50%";
  } else {
    shape.style.borderRadius = "0%";
  }
  shape.style.display = "block";
  shape.style.width = randomWidth + "px";
  shape.style.height = randomWidth + "px";
  shape.style.top = top + "px";
  shape.style.left = left + "px";
  shape.style.backgroundColor = randomColor();
  startTime = new Date().getTime();
}

  

function appearAfterDelay() {
  setTimeout(makeShapeAppear, Math.random() * 2000);
}

appearAfterDelay();

shape.onclick = function() {
  shape.style.display = "none";
  var endTime = new Date().getTime();
  var timeTaken = (endTime - startTime)/1000;
  txt.innerHTML = timeTaken + "s";
  appearAfterDelay();
}