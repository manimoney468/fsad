<?php
$servername="localhost";
$username="root";
$password="";
$dbname="venkat";
$conn=mysqli_connect($servername,$username,$password,$dbname);if(!$conn)
{
die("connectionfailed:".mysqli_connect_error());
}
$sql="CREATE TABLE student(sno varchar(20), sname varchar(20),addr varchar(20))";if(mysqli_query($conn,$sql))
{
echo"TablecreatedSuccessfully";
}
else
{
echo"Error creating Table";mysqli_error($conn);
}
mysqli_close($conn);
?>
