<?php
$servername="localhost";
$username="root";
$password="";
$dbname="reddy";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("connectionfailed:".mysqli_connect_error());
}
$sql="CREATE TABLE boo(title varchar(20),author varchar(20),pub varchar(20),price varchar(20)";
if(mysqli_query($conn,$sql))
{
echo"TablecreatedSuccessfully";
}
else
{
echo"Error creating Table";mysqli_error($conn);
}
mysqli_close($conn);
?>
