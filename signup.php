<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up</title>
</head>
<body>

<div class="container">

<div >
<h2>Sign up</h2>
<form  action="includes/signup.inc.php" method="post">

<input type="text" name="name" placeholder="Full Name...">
<input type="email" name="email" placeholder="Email...">
<input type="text" name="uid" placeholder="Username...">
<input type="password" name="pwd" placeholder="Password...">
<input type="password" name="pwdrepeat" placeholder="Password repeat">
<button type="submit" name="submit">Sign Up</button>

</form>

</div>

<?php
if(isset($_GET["error"]))
{
  if($_GET["error"]=="emptyinput")
  {
    echo "<p>Fill In All Fields</p>";
  }
  if($_GET["error"]=="usernamealreadyexists")
  {
    echo "<p>User already exist</p>";
  }
  if($_GET["error"]=="invalidemail")
  {
    echo "<p>Invalid Email</p>";
  }
  if($_GET["error"]=="passwordnotmatch")
  {
    echo "<p>Password don't match</p>";
  }if($_GET["error"]=="invaliduser")
  {
    echo "<p>Invalid user</p>";
  }if($_GET["error"]=="stmtfailed")
  {
    echo "<p>Something wrong! try again</p>";
  }
  if($_GET["error"]=="none")
  {
    echo "<p>Sign up successfull</p>";
  }
}



?>

</div>
  
</body>
</html>