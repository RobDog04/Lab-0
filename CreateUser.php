<?php
$connection = mysqli_connect("mysql.eecs.ku.edu", "robertnewman", "iey3Phei", "robertnewman");

$username = $_POST["username"];
$message = "";

if(isset($username))
{
  if(empty($username))
  {
    $message = "Please enter something into the field.";
  }
  else
  {
    $usercall = mysqli_query($connection, "SELECT user_id FROM User WHERE user_id = '$username'");
    if(mysqli_num_rows($usercall) == 1)
    {
      $message = "This username is in use.";
    }
    else
    {
      $message = "Account is created!";
      mysqli_query($connection, "INSERT INTO User (user_id) VALUES ('$username')"); 
    }
  }
}

?>

<HTML>
<HEAD>
<BODY>
<p>
<?php echo "$message";?>
</p>
</BODY>
</HEAD>
</HTML>