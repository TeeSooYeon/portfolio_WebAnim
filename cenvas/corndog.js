var corndog = document.getElementById("corndog");
var context = corndog.getContext("2d");

//stick
context.beginPath();
context.moveTo(40,40);
context.lineTo(180,180);

context.lineWidth = 6;
context.strokeStyle = "#8A795D";
context.stroke();

//corndog

context.beginPath();
context.moveTo(40,40);
context.lineTo(130,130);

context.lineWidth = "40";
context.strokeStyle = "#D5AE41";
context.lineCap = "round";
context.stroke();

//ketchup
context.beginPath();
context.moveTo(45,35);
context.bezierCurveTo(50,80,130,100,130,130);

context.lineWidth = "10";
context.strokeStyle = "#ff3300";
context.stroke();

