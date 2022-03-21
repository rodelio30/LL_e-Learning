<?php
$conn= mysqli_connect("localhost","root","");
		if(!$conn){
			$ConnErr = "Not Connected To The Server";
		}
		if(!mysqli_select_db($conn,'gad-db')){
			$SelcErr = "Database Not Selected";
		}
?>