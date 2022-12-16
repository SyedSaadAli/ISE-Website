<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Comment</th>
	</tr>
	<?php 
include("conn.php");
$sql = "SELECT id,Name,Comment from feedback";
$result =$conn->query($sql);
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		echo "<tr><td>".$row["id"]."</td><td>".$row["Name"]."</td><td>".$row["Comment"]."</td></tr>";
	}
	echo "</table>";
}
else {
	echo "0 result";
}
$conn->close();
	?>

</table>

</body>
<title>Table with database</title>
	<style type="text/css">
		table{
			border-collapse:collapse;
			width:100%;
			color:yellow;
			font-family:monospace;
			font-size:20px;
			text-align:left;
		}

		th{
			backkground-color:#d96459;
			color:black;
		}
		tr:nth-child(even){background-color:blue}
	</style>
</html>