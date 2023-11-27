<?php
$u=$_POST["t"];
$p=$_POST["p"];
$c=mysqli_connect("localhost","root","","fsad");
$q="select *from student where uname='$u' and pwd='$p'";
$r=mysqli_query($c,$q);
if(mysqli_num_rows($r)>0)
{
while($z=mysqli_fetch_assoc($r))
echo $z['books'];
}
else
die('invalid user name');
?>