<!DOCTYPE HTML>
<html>

<?php
  session_start();
  
$_SESSION['firstname'] = $_POST['name'];

$_SESSION['myradio'] =  $_POST['myradio'];

echo $_SESSION['myradio'];
?>

<head>
<link rel="stylesheet" type="text/css" href="exercise2.css">
<style>
.error {color: #FF0000;}
</style>
</head>  
<body>
<p><span class="error">* required field</span></p>
<form action="exercise2_order3.php" method="post">

<h1>Select Color</h1>
<div id="inner2">
<span class="size">

<div id="align3"><span class="error">*</span>Car color: <br>

<select name="colors" required>
 <option value="" disabled selected hidden></option>
<option class="blue" value="Blue">Blue</option>
  <option class="red" value="Red">Red</option>
  <option class="yellow" value="Yellow">Yellow</option></div>
  </select><br><br>
		   <span class="buttonplacing2">
            <button name="" type="submit" value="Next">>>Next>></button><br><br>
			<span class="align"><button name="models" type="submit" value="Next">Submit without validation</span></button>
           </span><br><br>

</form>
<a href="">Reload page</a>

</body>
</html>
