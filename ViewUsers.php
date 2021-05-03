<?php
$connection = mysqli_connect("mysql.eecs.ku.edu", "robertnewman", "iey3Phei", "robertnewman");


$usercall = mysqli_query($connection, "SELECT user_id FROM User");

echo "<ul>";
while($user = mysqli_fetch_array($usercall))
{
  echo "<li>";
  echo "$user[user_id]";
  echo "</li>";
}
echo "</ul>";
    
  


?>