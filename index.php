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
			<li class="w3-bar-item w3-button"><a href="index.php?page=module1">Module 1</a></li>
			<li class="w3-bar-item w3-button"><a href="index.php?page=module2">Module 2</a></li>
			<li class="w3-bar-item w3-button"><a href="index.php?page=module2">Module 3</a></li>
			<li class="w3-bar-item w3-button"><a href="index.php?page=module2">Module 4</a></li>
			<li class="w3-bar-item w3-button"><a href="index.php?page=module2">Module 5</a></li>
			<li class="w3-bar-item w3-button"><a href="index.php?page=module2">Module 6</a></li>
	</div>
    <?php
	switch($load){
		case 'home':
			require_once('home.php');
		break;
		case 'module1':
			require_once('module_1.php');
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
</html>