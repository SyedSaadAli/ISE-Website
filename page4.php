<?php
include("Common.php");
include("CheckLogin.php");
?>
<! DOCTYPE html><html>
<head><title>ORDER</title></head>
<body >
<style type="text/css">
a:link{color:black;}
a:visited{color:green;}
a:hover{color:orange; text-decoration:none; }
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
 <center>
<h1 align="center">Order Placement:</h1>
<p>Please Enter the following details <br/>These details are just to verify that you are not a fake customer<br/>Thank you for your cooperation</p>
<form action="form.php" method="post">
<table>
<tr>
<td>First Name</td>
<td ><input id="rcorners3" type="text" placeholder="First Name" name="i" required /></td>
</tr>
<tr>
<td>Last Name</td>
<td><input id="rcorners3" type="text" placeholder="Last Name" name="j" required /></td>
</tr>
<tr>
<td>Mobile Number</td>
<td><input id="rcorners3" type="text" placeholder="Mobile Number" name="k" required /></td>
</tr>
<tr>
<td>Address</td>
<td><input id="rcorners3" type="text" placeholder="Address" name="l" required /></td>
</tr>
<tr>
<td>NIC Number</td>
<td><input id="rcorners3" type="text" placeholder="NIC Number" name="m" required /></td>
</tr>
<tr>
<td>Email Address</td>
<td><input id="rcorners3" type="text" placeholder="Email Address" name="n" required /></td>
</tr>
<tr>
<td>Product Design Number</td>
<td><select name="o">
<option>Design #01</option>
<option>Design #02</option>
<option>Design #03</option>
<option>Design #04</option>
<option>Design #05</option>
<option>Design #06</option>
<option>Design #07</option>
<option>Design #08</option>
<option>Design #09</option>
<option>Design #10</option>
</select></td>
<td><input type="submit" value="Submit"/></td>
</tr>
</table>
</form>

</body>
</html>