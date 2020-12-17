
var wine = document.getElementById("wine");
var context = wine.getContext("2d");

//1st triagle
context.beginPath();
context.moveTo(50,50);
context.lineTo(150,50);
context.lineTo(100,100);
context.closePath();

context.lineWidth = 5;
context.strokeStyle = "#f1f3f5";
context.stroke();

context.fillStyle = "#f1f3f5";
context.fill();

//2nd triagnle
context.beginPath();
context.moveTo(80,180);
context.lineTo(100,150);
context.lineTo(120,180);
context.closePath();

context.lineWidth = 5;
context.strokeStyle = "#f1f3f5";
context.stroke();

context.fillStyle = "#f1f3f5";
context.fill();

//handle
context.beginPath();
context.moveTo(100,100);
context.lineTo(100,150);

context.lineWidth = 8;
context.strokeStyle = "#f1f3f5";
context.stroke();

//contents
context.beginPath();
context.moveTo(70,58);
context.lineTo(130,58);
context.lineTo(100,90);
context.closePath();

context.lineWidth = 5;
context.strokeStyle = "#c92a2a";
context.stroke();

context.fillStyle = "#c92a2a";
context.fill();
