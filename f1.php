<?php

$Email=$_POST['EmailAddress'];
$E="";
echo"Lets start programming";
include("conn.php");
$sql = "SELECT EmailAddres from users";
$result =$conn->query($sql);
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		if($Email==$row['EmailAddress']){
		$E=$row['EmailAddress'];
		//$p=$row['Password'];
		echo "$E";
		//echo "$p";
	}
	}
}
if($E=="null")
echo "This Email Address does not match our records";
$conn->close();



 ?>