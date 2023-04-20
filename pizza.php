<!DOCTYPE html>
<html>
<head><title>Pizza Topping Selector - by Amos Johnson</title>
</head>
<body style="background-color: rgb(227,243,209);">
    <h2>Pizza Topping Selector - by Amos Johnson</h2>    
      You selected the following toppings: <br />
<?php
$tops = $_POST['toppings'];
foreach($tops as $toppings) {
	echo "<li>$toppings</li>";
}
?>
      <ul>
 
 
 
 
 
 
      </ul>
</body>
</html>
