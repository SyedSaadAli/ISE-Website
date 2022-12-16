<?php
include("Common.php");
include("CheckLogin.php");
?>
<! DOCTYPE html><html >
<head>


    <title>FEEDBACK</title>
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
  </div>
   <center>
  <h1>ADD COMMENTS</h1><br/>

<form action="comment.php" method="post">
<table>
<tr>
<td>Name:</td>
<td><input type="text" name="i" required /></td>
</tr>
<tr>
<td>Comment:</td>
<td><input type="text" name="c"/></td>
</tr>
<tr><td><input type="submit" value="post" required /></td></tr>
</table></form></center>
  </body>
  </html>