<?php 

$db = mysqli_connect("localhost", "root", "", "nra"); 

$sql = "SELECT * FROM csd_departments";

$result = mysqli_query($db, $sql);
$files = mysqli_fetch_assoc($result);

 
if(isset($_GET['file_id'])) {

  $id = $_GET['file_id'];

  $sql = "SELECT * FROM csd_departments WHERE id = $id";

  $result = mysqli_query($db, $sql);
  $file = mysqli_fetch_assoc($result);

}
 

