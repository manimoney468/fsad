<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);if(!$conn)
{
die("connectionfailed:".mysqli_connect_error());
}
$sql="CREATE DATABASE venkat";
if(mysqli_query($conn,$sql))
{
echo"DatabasecreatedSuccessfully";
}
else
{
echo"ErrorcreatingDatabase";
 
mysqli_error($conn);
}
mysqli_close($conn);
?>
