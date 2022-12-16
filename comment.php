<! DOCTYPE html><html >
<head>


    <title>COMMENT</title>
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
$Name=$_POST['i'];
$Comment=$_POST['c'];
include("conn.php");

//<br/><center><h3><?php if($a!=null&&$b!=null){echo "Your comment is added successfully" ;}
//else if($a==null&&$b==null){echo "You have left the comment box empty <br/>Plz recheck ";}
//else if($a==null){echo "You forgot to mention your name";}
//else if($b==null){echo "You may have forgot to mention the comment";}
   $INSERT = "INSERT Into feedback(Name,Comment) values(?,?)";

$stmt=$conn->prepare($INSERT);
$stmt->bind_param("ss",$Name,$Comment);
$stmt->execute();?>
<br/><center><h3><?php echo "Your comment is added successfully" ;?> </h3></center>
<?php

$stmt->close();
$conn->close();	
?>