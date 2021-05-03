<?php
$connection = mysqli_connect("mysql.eecs.ku.edu", "robertnewman", "iey3Phei", "robertnewman");

$delSelect = $_POST["postCall"];
echo "These ID's were Removed";
foreach($delSelect as $post_ids)
{
  echo "<br>";
  mysqli_query($connection, "DELETE FROM Posts WHERE post_id = 'post_ids'");
  echo "$post_ids";
}
?>
