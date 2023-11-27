<?php
$u=$_POST["t1"];
$p=$_POST["p"];
$b=$_POST["t2"];
$c=mysqli_connect("localhost","root","","fsad");
$q="insert into student(uname,pwd,books)values('$u','$p','$b')";
if(mysqli_query($c,$q))
echo "<script>alert('Registration successful.........');</script>";
else
die ("errror");
?>