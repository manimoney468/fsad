<?php
/* Attempt MySQL server connection. Assuming you are running MySQLserver withdefaultsetting(user'root'withnopassword)*/
$link=mysqli_connect("localhost","root","","bookstore");

// Check 
connectionif($link=== false){
die("ERROR:Couldnotconnect.".mysqli_connect_error())
}


//Escapeuserinputsforsecurity
$title=$_POST['bt'];
$author=$_POST['an'];
$pub=$_POST['pd'];
$price=$_POST['price'];

//Attemptinsertqueryexecution
$sql = "INSERT INTO book VALUES ('$title', '$author', '$pub','$price')";if(mysqli_query($link,$sql)){
echo"Recordsaddedsuccessfully.";
}else{
echo"ERROR:Couldnotabletoexecute$sql.".mysqli_error($link);
}

// Close connectionmysqli_close($link);
?>
