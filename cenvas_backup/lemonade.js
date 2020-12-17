  var lmn = document.getElementById("lemonade");
  var context = lmn.getContext("2d");

//straw
context.beginPath();
context.moveTo(100,80);
context.lineTo(150,15);

context.lineWidth = 10;
context.strokeStyle = "#ffa8a8";
context.stroke();

//lemon
context.beginPath();
context.arc(60, 40, 23, (Math.PI/180)*0, (Math.PI/180)*360, false);
context.closePath();
context.fillStyle = "#FFEB3B";
context.fill();
context.beginPath();
context.arc(60, 40, 18, (Math.PI/180)*0, (Math.PI/180)*360, false);
context.closePath();
context.fillStyle = "#FFF176";
context.fill();

    //glass
  context.fillStyle = '#eceff4';
  context.fillRect(60, 40, 80, 140);

  //contents
  context.fillStyle = '#ecf386';
  context.fillRect(67, 45, 65, 130);

  context.beginPath();
  context.moveTo(75,150);
  context.lineTo(95,130);
  context.lineTo(115,150);
  context.lineTo(95,170);
  context.closePath();
  //ice_1
  context.lineWidth = 5;
  context.strokeStyle = "#e5f4fb";
  context.stroke();

  context.fillStyle = "#e5f4fb";
  context.fill();
//ice_2
  context.beginPath();
  context.moveTo(85,110);
  context.lineTo(105,90);
  context.lineTo(125,110);
  context.lineTo(105,130);
  context.closePath();

  context.lineWidth = 5;
  context.strokeStyle = "#e5f4fb";
  context.stroke();

  context.fillStyle = "#e5f4fb";
  context.fill();
  
