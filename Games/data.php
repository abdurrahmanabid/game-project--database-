
<?php


$userName = $_GET['name'];
$gameName = $_GET['gName'];

//SQL
$conn = mysqli_connect('localhost','root','','dbms_project');
if (mysqli_connect_errno()) {
  die(''. mysqli_connect_error());
}


  
  $sql="INSERT INTO `".$userName."`( `gnname`) VALUES ('".$gameName."');";
// $sql = "INSERT INTO `abid123`( `gnname`, `played_count`) VALUES ('[value-2]','[value-3]')";
  
  
  mysqli_query($conn,$sql);



mysqli_close($conn);


?>