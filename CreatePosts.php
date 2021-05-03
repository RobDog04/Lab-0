<?php
$connection = mysqli_connect("mysql.eecs.ku.edu", "robertnewman", "iey3Phei", "robertnewman");

$username = $_POST["username"];
$posts = $_POST["post"];
$message = "";


  if(empty($username))
  {
    $message = "Please enter something into the field.";
  }
  else if(empty($posts))
  {
    $message = "Please enter content into the field.";
  }
  else
  {
    $usercall = mysqli_query($connection, "SELECT * FROM User WHERE user_id = '$username'");
    if(mysqli_num_rows($usercall) == 1)
    {
      $message = "Your Post is Recorded!";
      mysqli_query($connection, "INSERT INTO Posts (content, author_id) VALUES ('$posts', '$username')");
    }
    else
    {
      $message = "There is no username that matches the one entered";
      
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