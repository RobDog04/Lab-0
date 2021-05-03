<?php
$connection = mysqli_connect("mysql.eecs.ku.edu", "robertnewman", "iey3Phei", "robertnewman");
$usercalls = $_POST["dropMenu"];
$contents = mysqli_query($connection, "SELECT content FROM Posts WHERE author_id = ('$usercalls')");

echo "<ul>";
while($ctnt = mysqli_fetch_array($contents))
{
  echo "<li>";
  echo "$ctnt[content]";
  echo "</li>";
}
echo "</ul>";
    
  


?>

