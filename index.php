<?php
    $load = (isset ($_GET['page'])&& $_GET['page']!='')? $_GET['page']:'';
?>
<html>
    <head>
        <title>Web Animation Portfolio</title>
	</head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/mystyle.css">
	<body>
	<div class="w3-sidebar w3-bar-block w3-pale-yellow w3-animate-left" style="display:none;z-index:5" id="mySidebar">
		<button class="w3-bar-item w3-button w3-large"
  			onclick="w3_close()">Close &times;</button>
			<a class="w3-bar-item w3-button" href="index.php?page=home">Home</a>
			<button class="w3-button w3-block w3-left-align" onclick="myAccFunc()">
			CSS <i class="fa fa-caret-down"></i>
			</button>
			<div id="demoAcc" class="w3-hide w3-white w3-card">
				<a class="w3-bar-item w3-button" href="index.php?page=module2">Module 2</a>
				<a class="w3-bar-item w3-button" href="index.php?page=module3">Module 3</a>
				<a class="w3-bar-item w3-button" href="index.php?page=module4">Module 4</a>
			</div>
			<button class="w3-button w3-block w3-left-align" onclick="myAccFunc1()">
			SVG <i class="fa fa-caret-down"></i>
			</button>
			<div id="demoAcc1" class="w3-hide w3-white w3-card">
				<a class="w3-bar-item w3-button" href="index.php?page=module5">Module 5</a>
				<a class="w3-bar-item w3-button" href="index.php?page=module6">Module 6</a>
			</div>
			<button class="w3-button w3-block w3-left-align" onclick="myAccFunc2()">
			CANVAS <i class="fa fa-caret-down"></i>
			</button>
			<div id="demoAcc2" class="w3-hide w3-white w3-card">
				<a class="w3-bar-item w3-button" href="index.php?page=module7">Module 7</a>
			</div>
			<a class="w3-bar-item w3-button" href="https://thealps-cle.herokuapp.com/" target="_blank">The Alps Website</a>
			<a class="w3-bar-item w3-button" href="https://toquero-portfolio.herokuapp.com/midtermcle/midterm.html" target="_blank">Floom Animated Garden</a><br/><br/><br/><br/>
			<a class="w3-bar-item w3-button" href="index.php?page=about">About</a>

	</div>
	<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor: pointer;" id="myOverlay"></div>
		<button class="w3-button w3-white w3-xxlarge" onclick="w3_open()" style="position:fixed;">&#9776;</button>
		<div class="w3-container">
		<a href="index.php?page=home"><img style="width:500px;position:relative;margin-bottom:70px;left:35%;margin-top:50px" src="src/h1.svg"></a>
		<?php
		switch($load){
			case 'home':
				require_once('home.php');
			break;
			case 'module2':
				require_once('dir_css/module_2.php');
			break;
			case 'module3':
				require_once('dir_css/module_3.php');
			break;	
			case 'module4':
				require_once('dir_css/module_4.php');
			break;	
			case 'module5':
				require_once('dir_svg/module_5.php');
			break;	
			case 'module6':
				require_once('dir_svg/module_6.php');
			break;	
			case 'module7':
				require_once('dir_canvas/module_7.php');
			break;
			case 'css':
				require_once('lob_css.php');
			break;
			case 'svg':
				require_once('lob_svg.php');
			break;	
			case 'about':
				require_once('about.php');
			break;	
			default:
				require_once('home.php');
		}
		?>
		</div>
<script>
function w3_open() {
	document.getElementById("mySidebar").style.display = "block";
	document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
	document.getElementById("mySidebar").style.display = "none";
	document.getElementById("myOverlay").style.display = "none";
}
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-grey";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-grey", "");
  }
}
function myAccFunc1() {
  var x = document.getElementById("demoAcc1");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-grey";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-grey", "");
  }
}
function myAccFunc2() {
  var x = document.getElementById("demoAcc2");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-grey";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-grey", "");
  }
}
</script>
	</body>
	<footer>
	</footer>
</html>
