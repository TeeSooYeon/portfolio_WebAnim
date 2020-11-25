var head = document.getElementById("dedhead");
var context = head.getContext("2d");

context.beginPath();
context.arc(100, 80, 50, (Math.PI/180)*0, (Math.PI/180)*360, false);
context.closePath();
context.fillStyle = "#adb5bd";
context.fill();

context.fillStyle = '#adb5bd';
context.fillRect(67, 90, 65, 60);

//eyes
context.beginPath();
context.arc(75, 85, 10, (Math.PI/180)*0, (Math.PI/180)*360, false);
context.fillStyle = "black";
context.fill();
context.closePath();


context.beginPath();
context.arc(125,85, 10, (Math.PI/180)*0, (Math.PI/180)*360, false);
context.closePath();
context.fillStyle = "#00000";
context.fill();

context.beginPath();
context.arc(95, 105, 4, (Math.PI/180)*0, (Math.PI/180)*360, false);
context.fillStyle = "black";
context.fill();
context.closePath();


context.beginPath();
context.arc(105,105, 4, (Math.PI/180)*0, (Math.PI/180)*360, false);
context.closePath();
context.fillStyle = "#00000";
context.fill();

context.fillStyle = 'rgb(193, 241, 225)';
context.fillRect(80, 122, 7, 28);
context.fillStyle = 'rgb(193, 241, 225)';
context.fillRect(96, 122, 7, 28);
context.fillStyle = 'rgb(193, 241, 225)';
context.fillRect(112, 122, 7, 28);