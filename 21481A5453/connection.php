<?php
$c=mysqli_connect("localhost","root","");
if($c)
{
echo 'connection established';
$q="create database fsad";
if(mysqli_query($c,$q))
echo "<script>alert('database created.....');</script>";
else
echo "<script>alert('database error......');</script>";
}
else
die("error");
?>