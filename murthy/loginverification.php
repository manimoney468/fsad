<?php
$uname=$_POST['t'];
$pwd=$_POST['p'];
$servername="localhost";
$username="root";
$password="";
$dbname="login";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("connection failed:".mysqli_connect_error());
}
$res=mysqli_query($conn,"select * from user where uname='".$uname."' and password='".$pwd."'");
if(!empty($res))
{
	if($row=mysqli_fetch_array($res)){
	$_SESSION['sess_user']=$row['uname'];
echo $_SESSION['sess_user'];
header("Location:welcome.php");}
else
{
header("Location:failure.php");
}
}
echo "</center>";
mysqli_close($conn);
?>
