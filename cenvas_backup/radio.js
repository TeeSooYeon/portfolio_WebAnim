
  var radio = document.getElementById("radio");
  var context = radio.getContext("2d");

  //body
  context.fillStyle = '#ae3ec9';
  context.fillRect(20, 80, 155, 80);

//speakers
context.beginPath();
context.arc(50, 120, 20, (Math.PI/180)*0, (Math.PI/180)*360, false);
context.closePath();
context.fillStyle = "#364fc7";
context.fill();

context.beginPath();
context.arc(145, 120, 20, (Math.PI/180)*0, (Math.PI/180)*360, false);
context.closePath();
context.fillStyle = "#364fc7";
context.fill();

//center
context.fillStyle = "#da77f2";
context.fillRect(75, 100, 45,60);

context.fillStyle = "#364fc7";
context.fillRect(80,110,35,10);

context.fillStyle = "#364fc7";
context.fillRect(80,130,35,10);

//handle
context.beginPath();
context.moveTo(50,80);
context.lineTo(50,40);
context.lineTo(145,40);
context.lineTo(145,80);

context.lineWidth = 10;
context.strokeStyle = "#364fc7";
context.stroke();
