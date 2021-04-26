<?php
if(isset($_POST["submit"]))
{

  $name=$_POST["name"];
  $email=$_POST["email"];
  $username=$_POST["uid"];
  $pwd=$_POST["pwd"];
  $pwdRepeat=$_POST["pwdrepeat"];


  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';



  if(emptyInputSignUp($name,$email,$username,$pwd,$pwdRepeat)!=false)
  {
    header("Location: ../signup.php?error=emptyinput");
    exit();
  }
  if(invalidUid($username)!=false)
  {
    header("Location: ../signup.php?error=invaliduser");
    exit();
  }
  if(invalidEmail($email)!=false)
  {
    header("Location: ../signup.php?error=invalidemail");
    exit();
  }
  if(pwsMatch($pwd,$pwdRepeat)!=false)
  {
    header("Location: ../signup.php?error=passwordnotmatch");
    exit();
  }
  if(uidExists($conn,$username,$email)!=false)
  {
    header("Location: ../signup.php?error=usernamealreadyexists");
    exit();
  }

  createUser($conn, $name,$email,$username,$pwd);



  
}
else
{
  header("Location: ../signup.php");
  exit();
}
