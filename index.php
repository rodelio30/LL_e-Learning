<?php 

date_default_timezone_set("Asia/Manila");
session_start();
if(!isset($_SESSION['logged'])){
  header("location: login.php");
}
include ('include/connect.php');
$id=$_SESSION['id'];

$query=mysqli_query($conn,"select id,type from users where id='$id'")or die ("query 1 incorrect.......");
list($id,$type)=mysqli_fetch_array($query);

if($type=='student'){
  header("location: user.php");
}

?>