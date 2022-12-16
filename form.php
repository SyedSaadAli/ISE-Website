<! DOCTYPE html><html >
<head>


  
<style type="text/css">
a:link{color:black;}
a:visited{color:green;}
a:hover{color:orange;text-decoration:none; }
a:active{color:brown;}

html{background: url('de.jpeg') no-repeat center center fixed;
-webkit-background-size:cover;
-moz-background-size:cover;
-o-background-size:cover;
background-size:cover;
}
</style>
   
</head>

<body >

  <div align="middle"; style="background-color:black;color:white;padding:10;">
 <a href="page1.php">	HOME</a>|
  <a href="page2.php">PORTFOLIO</a>|
  <a href="page5.php">ABOUT</a>|
   <a href="page3.php">CONTACT</a>|
    <a href="page4.php">REGISTRATION</a>|
	<a href="page6.php">FEEDBACK</a>
  </div></body></html><?php
$FirstName=$_POST['i'];
$LastName=$_POST['j'];
$PhoneNo=$_POST['k'];
$Address=$_POST['l'];
$NIC=$_POST['m'];
$Email=$_POST['n'];
$ProductDesignNumber=$_POST['o'];
include("conn.php");

    $INSERT = "INSERT Into productorder(FirstName,LastName,PhoneNo,Address,NIC,Email,ProductDesignNumber) values(?,?,?,?,?,?,?)";
  
$stmt=$conn->prepare($INSERT);
$stmt->bind_param("ssissss",$FirstName,$LastName,$PhoneNo,$Address,$NIC,$Email,$ProductDesignNumber);
$stmt->execute();?>
<br/><center><h3><?php echo "Your order has been requested successfully" ;?> </h3></center>
<?php

$stmt->close();
$conn->close();	
//<br/><center><h3><?php if($a!=null&&$b!=null&&$c!=null&&$d!=null&&$e!=null&&$f!=null){
	//echo "Your form has been successfully submited ";}
	//else echo "Please recheck your form and filled correctly"; ?></h3></center>
?>

