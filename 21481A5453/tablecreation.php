<?php
$c=mysqli_connect("localhost","root","","fsad");
$q="create table student(uname varchar(20),pwd varchar(20),books varchar(20))";
if(mysqli_query($c,$q))
echo "<script>alert('table created')</script>";
else
echo "table already exists";
?>