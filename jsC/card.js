var card = document.getElementById("card");
var context = card.getContext("2d");

context.fillStyle = '#f8f9fa';
context.fillRect(50, 20, 100, 155);

context.fillStyle = '#c92a2a';
context.font = '28px Arial';
context.textBaseline = 'top';
context.fillText ("A", 51,21);

context.fillStyle = '#c92a2a';
context.font = '28px Arial';
context.textBaseline = 'top';
context.fillText ("A", 130,150);

context.beginPath();
context.moveTo(90,100);
context.lineTo(100,80);
context.lineTo(110,100);
context.lineTo(100,120);
context.closePath();

context.lineWidth = 5;
context.strokeStyle = "#c92a2a";
context.stroke();

context.fillStyle = "#c92a2a";
context.fill();