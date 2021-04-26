<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
</head>
<body>

<div class="container">

<div >
<h2>Sign In</h2>
<form  action="includes/login.inc.php" method="post">

<input type="text" name="uid" placeholder="Username/Email...">
<input type="password" name="pwd" placeholder="Password...">
<button type="submit" name="submit">Sign In</button>

</form>

</div>

<?php
if(isset($_GET["error"]))
{
  if($_GET["error"]=="emptyinput")
  {
    echo "<p>Fill In All Fields</p>";
  }
  if($_GET["error"]=="wronglogin")
  {
    echo "<p>Invalid login</p>";
  }
  
}



?>

</div>
  
</body>
</html>