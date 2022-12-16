
<?php 

include("conn.php");

$PortalID=$_POST['PortalID'];
$Name=$_POST['Name'];
$EmailAddress=$_POST['EmailAddress'];
$Password=$_POST['Password'];
$Confirm_Password=$_POST['Confirm_Password'];
$RoleID=$_POST['RoleID'];


if($Password==$Confirm_Password){

  $SELECT = "SELECT EmailAddress From users Where EmailAddress = ? Limit 1";
    $INSERT = "INSERT Into users(PortalID,Name,EmailAddress,Password,RoleID) values(?,?,?,?,?)";
 //prepare statement
  $stmt = $conn->prepare($SELECT);
  $stmt -> bind_param("s",$EmailAddress);
  $stmt->execute();
  $stmt->bind_result($EmailAddress);
  $stmt->store_result();
  
$rnum=$stmt->num_rows;
if($rnum==0)
{
$stmt->close();

$stmt=$conn->prepare($INSERT);
$stmt->bind_param("sssss",$PortalID,$Name,$EmailAddress,$Password,$RoleID);
$stmt->execute();
echo "Your Account is created successfully";
header('location:login.php');
}
else{
  echo "Someone already register using this email";
} 
$stmt->close();
$conn->close(); 

}else {
  echo"Plz recheck your password";
}
?>