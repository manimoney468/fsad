<?php
$servername="localhost";
$username="root";
$password="";
$dbname="bookstore";
$conn=mysqli_connect($servername,$username,$password,$dbname); if(!$conn)
{
die("connectionfailed:".mysqli_connect_error());
}
echo"<h1align=center><fontcolor=red>Book-Store-Details</font></h1>";
 
$res=mysqli_query($conn,"select* frombook");
echo"<tablecellpadding=7border=2align=center><tr>
<th>Title</th>
<th>Author</th><th>Publication</th>
<th>Price</th>
</tr>";while($temp=mysqli_fetch_array($res))
{
echo "<tr><td>".$temp['title']."</td><td>".$temp['author']."</td><td>".$temp['publication']."</td><td>".$temp['price']."</td></tr>";
}
echo"</center>";
;

mysqli_close($conn);
?>
