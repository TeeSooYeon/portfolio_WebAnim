<?php
    $load = (isset ($_GET['page'])&& $_GET['page']!='')? $_GET['page']:'';
?>
<html>
    <head>
        <title>Web Animation Portfolio</title>
    </head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <div class="w3-bar w3-blue w3-top">
			<li class="w3-bar-item w3-button"><a href="index.php?page=home">Home</a></li>
			<li class="w3-bar-item w3-button"><a href="index.php?page=css">CSS</a></li>
			<li class="w3-bar-item w3-button"><a href="index.php?page=svg">SVG</a></li>
	</div>
    <?php
	switch($load){
		case 'home':
			require_once('home.php');
		break;
		case 'css':
			require_once('css.php');
		break;
		case 'svg':
			require_once('svg.php');
		break;	
		default:
			require_once('home.php');
	}
?>
</html>