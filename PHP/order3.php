<!DOCTYPE HTML>
<html>
<?php 

session_start();
$_SESSION['carcolors'] = $_POST['colors'];

?>
<head>
<title>Order3</title>
</head>  
<body>
<?php 

$firstname = $_SESSION['firstname'];
$model = $_SESSION['myradio'];
$color = $_SESSION['carcolors'];
    
	setcookie('mycookie1', $firstname);
	setcookie('mycookie2', $model);
	setcookie('mycookie3', $color);
	echo "Hi: " . $_COOKIE['mycookie1'];
	echo "<br>";
	echo "Your car color is: " . $_COOKIE['mycookie3'];
	echo "<br>";
	echo "Your car model is: " . $_COOKIE['mycookie2'];
    echo "<br>";
	if ($color == 'Blue' && $model == 'Ford Mustang') {
    echo "<img src = 'Ford_Blue.jpg' alt = 'blue Ford car image!'>";
	} 
elseif($color == 'Red' && $model == 'Ford Mustang') {
		echo "<img src = 'Ford_Red.jpg' alt = 'red Ford car image!'>";
	}
	elseif($color == 'Yellow' && $model == 'Ford Mustang') {
		echo "<img src = 'Ford_Yellow.jpg' alt = 'yellow Ford car image!'>";
	}
	elseif($color == 'Blue' && $model == 'Subaru WRX STI') {
		echo "<img src = 'Subaru_Blue.jpg' alt = 'red Ford car image!'>";
	}
	elseif($color == 'Red' && $model == 'Subaru WRX STI') {
		echo "<img src = 'Subaru_Red.jpg' alt = 'yellow Ford car image!'>";
	}
	elseif($color == 'Yellow' && $model == 'Subaru WRX STI') {
		echo "<img src = 'Subaru_Yellow.jpg' alt = 'red Ford car image!'>";
	}
	elseif($color == 'Blue' && $model == 'Corvette') {
		echo "<img src = 'Corvette_Blue.jpg' alt = 'yellow Ford car image!'>";
	}
	elseif($color == 'Red' && $model == 'Corvette') {
		echo "<img src = 'Corvette_Red.jpg' alt = 'red Ford car image!'>";
	}
	elseif($color == 'Yellow' && $model == 'Corvette') {
		echo "<img src = 'Corvette_Yellow.jpg' alt = 'red Ford car image!'>";
	}
	echo "<br>";
	echo "<br>";
	
?>
<a href="exercise2_order1.php" target="_blank">Order1.php</a>
</body>
</html>
