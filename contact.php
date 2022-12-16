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
opacity:0.5;
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
$Name=$_POST['x'];
$Email=$_POST['y'];
$PhoneNo=$_POST['z'];
$Message=$_POST['u'];
include("conn.php");
//<br/><center><h3><?php if($a!=null&&$b!=null&&$c!=null&&$d!=null){echo "Your message has been successfully delivered" ;}
//else echo "Your message is not delivered successfully ";

	
	//$SELECT = "SELECT E From register Where E = ? Limit 1";
    $INSERT = "INSERT Into contact(Name,Email,PhoneNo,Message) values(?,?,?,?)";
	//prepare statement
	//$stmt = $conn->prepare($SELECT);
	//$stmt -> bind_param("s",$E);
	//$stmt->execute();
	//$stmt->bind_result($E);
	//$stmt->store_result();
	
//$rnum=$stmt->num_rows;
//if($rnum==0)
//{
//$stmt->close();

$stmt=$conn->prepare($INSERT);
$stmt->bind_param("ssis",$Name,$Email,$PhoneNo,$Message);
$stmt->execute();?>
<br/><center><h3><?php echo "Your message has been successfully delivered" ;?> </h3></center>
<?php
//}
//else{
	//echo "Your message is not delivered successfully ";
//}	
$stmt->close();
$conn->close();	
?>