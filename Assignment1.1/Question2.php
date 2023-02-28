<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
   <h2>Please input your name:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit">
 </form>
<?php
$name = $_POST['name'];//store the value of name from above
echo "<h3>$name</h3>";
?>
</body>
</html>