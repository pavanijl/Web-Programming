<!DOCTYPE HTML>
<html>
<?php
  
$name_error = '';
$cars_error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") 
 {  
      if(!preg_match("/^[a-zA-Z ]*$/", $_POST["name"]))  
           {  
                $name_error = "<p>Only Letters and whitespace allowed</p>";  
           }  
	  
 }  
  
 ?>

<head>
<link rel="stylesheet" type="text/css" href="exercise2.css">
<style>
.error {color: #FF0000;}
</style>
</head>  
<body>
 <p><span class="error">* required field</span></p>

<form action="exercise2_order2.php" method="post">

<h1>Select Model</h1>
<div id="inner">
<span class="size">
<span class="error">*</span>
First Name: <input type="text" name="name" size="40" placeholder="First name"  required minlength="3" maxlength="28"><br><br>
<span class="error">* <?php echo $name_Error; ?></span>
Car model: <br>
           <input type="radio" name="myradio" value="Ford Mustang" required>
           <label>Ford Mustang</label><br>
           <input type="radio" name="myradio" value="Subaru WRX STI">
           <label>Subaru WRX STI</label><br>
           <input type="radio" name="myradio" value="Corvette">
           <label>Corvette</label><br></span><span class="error"><?php echo $cars_error; ?></span>
		   <span class="buttonplacing">
            <button name="submit" type="submit" value="submit">>>Next>></button><br><br>
			
</form>

<form action="exercise2_order2.php" novalidate>
<span id="align"><button name="submit" type="submit" value="submit" novalidate>Submit without validation</span></button>
           </span> </form> <br>
<div id="align2"><a href="">Reload page</a></div>

</body>
</html>
