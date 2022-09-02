<?php 

$db = mysqli_connect("localhost", "root", "", "nra"); 

$sql = "SELECT * FROM inventory";

$result = mysqli_query($db, $sql);
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

 
if(isset($_GET['file_id'])) {

  $id = $_GET['file_id'];

  $sql = "SELECT * FROM inventory WHERE id=$id";

  $result = mysqli_query($db, $sql);
  $file = mysqli_fetch_assoc($result);

}
 

