<?php
include("Common.php");
include("CheckLogin.php");
?>
<! DOCTYPE html><html>
<head><title>CONTACT INFO</title></head>
<body  >
<style type="text/css">
a:link{color:black;}
a:visited{color:green;}
a:hover{color:orange;text-decoration:none; }
a:active{color:brown;}
#rcorners3{
  border-radius: 10px 30px;
  }
  html{background: url('de.jpeg') no-repeat center center fixed;
-webkit-background-size:cover;
-moz-background-size:cover;
-o-background-size:cover;
background-size:cover;
}
</style>
  <div align="middle"; style="background-color:black;color:white;padding:10;">
   <a href="page1.php">	HOME</a>|
  <a href="page2.php">PORTFOLIO</a>|
   <a href="page5.php">ABOUT</a>|
   <a href="page3.php">CONTACT</a>|
    <a href="page4.php">REGISTRATION</a>|
	<a href="page6.php">FEEDBACK</a>
  </div>
 

<center><h1>CONTACT US:</h1>
<h3>Fill the form below to reach us.</h3>
<form  action="contact.php" method="post">
<table>
<tr>
<td>Name:</td>
<td ><input id="rcorners3" type="text" placeholder="Your Name *" name="x" required /></td><br/>
</tr>
<tr>
<td>Email:</td>
<td><br/><input id="rcorners3" type="text" placeholder="Email Address" name="y" required /></td>
</tr>
<tr>
<td>Phone Number: </td>
<td><br/><input id="rcorners3" type="text" placeholder="Phone Number *" name="z" required /></td>
</tr>
<tr>
<td>Message Box:</td>
<td><br/><br/><input style=" width: 100%;
  height: 90px;" id="rcorners3" type="text" placeholder="Your Message" name="u" required /></td>
</tr>
<td><br/><button  type="submit" value="Send Message">Send Message</button></td>
</table></form>

</center>
</body>
</html>