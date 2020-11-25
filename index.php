<?php
    $load = (isset ($_GET['page'])&& $_GET['page']!='')? $_GET['page']:'';
?>
<html>
    <head>
        <title>Web Animation Portfolio</title>
    </head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="css/mystyle.css">
	<div class="w3-sidebar w3-bar-block w3-teal w3-animate-left" style="display:none" id="mySidebar">
		<button class="w3-bar-item w3-button w3-large"
  			onclick="w3_close()">Close &times;</button>
			<a class="w3-bar-item w3-button" href="index.php?page=home">Home</a>
			<a class="w3-bar-item w3-button" href="index.php?page=module2">Module 2</a>
			<a class="w3-bar-item w3-button" href="index.php?page=module3">Module 3</a>
			<a class="w3-bar-item w3-button" href="index.php?page=module4">Module 4</a>
			<a class="w3-bar-item w3-button" href="https://thealps-cle.herokuapp.com/" target="_blank">Culminating Activity</a>
			<a class="w3-bar-item w3-button" href="index.php?page=module5">Module 5</a>
			<a class="w3-bar-item w3-button" href="index.php?page=module6">Module 6</a>
			<a class="w3-bar-item w3-button" href="https://toquero-portfolio.herokuapp.com/midtermcle/midterm.html">Culminating Activity Midterm</a>
			<a class="w3-bar-item w3-button" href="https://toquero-portfolio.herokuapp.com/cenvas/canvas.html">Module 7</a>
	</div>
	<div>
		<button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
	<div class="w3-container">
	<h1 class="head">Hans Toquero Portfolio</h1>
    <?php
	switch($load){
		case 'home':
			require_once('home.php');
		break;
		case 'module2':
			require_once('module_2.php');
		break;
		case 'module3':
			require_once('module_3.php');
		break;	
		case 'module4':
			require_once('module_4.php');
		break;	
		case 'module5':
			require_once('module_5.php');
		break;	
		case 'module6':
			require_once('module_6.php');
		break;	
		default:
			require_once('home.php');
	}
?>
	</div>
	</div>
<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
</html>
