var heart = document.getElementById("heart");
var context = heart.getContext("2d");

//screen
context.fillStyle = '#00000';
context.fillRect(30, 70, 140, 90);

//antenae
context.beginPath();
context.moveTo(20,20);
context.lineTo(70,50);
context.lineTo(130,50);
context.lineTo(180,20);

context.lineWidth = 3;
context.strokeStyle = "#00000";
context.stroke();

context.fillStyle = '#ced4da';
context.fillRect(65, 45, 70, 20);

//line
context.beginPath();
context.moveTo(30,115);
context.lineTo(50,115);
context.lineTo(55,100);
context.lineTo(60,115);
context.lineTo(65,130);
context.lineTo(70,90);
context.lineTo(75,115);
context.lineTo(80,100);
context.lineTo(85,115);
context.lineTo(110,115);

context.moveTo(110,115);
context.lineTo(120,115);
context.lineTo(125,100);
context.lineTo(130,115);
context.lineTo(135,130);
context.lineTo(140,90);
context.lineTo(145,115);
context.lineTo(150,100);
context.lineTo(155,115);
context.lineTo(170,115);

context.lineWidth = 3;
context.strokeStyle = "#00ff00";
context.stroke();

//cover
context.beginPath();
context.moveTo(25,65);
context.lineTo(25,165);
context.lineTo(175,165);
context.lineTo(175,65);
context.closePath();

context.lineWidth = 15;
context.strokeStyle = "#868e96";
context.stroke();
