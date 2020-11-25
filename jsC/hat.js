
  var hat = document.getElementById("hat");
  var context = hat.getContext("2d");

    //hat itself
  context.fillStyle = '#996600';
  context.fillRect(50, 15, 100, 100);
  //black design
  context.fillStyle = '#000000';
  context.fillRect(50,105,100,20);
  //cover
  context.beginPath();
  context.strokeStyle = "#996600";
  context.lineWidth = "20";
  context.lineCap = 'round';
  context.moveTo(20, 135);
  context.lineTo(180, 135);
  context.stroke();
  context.closePath();
