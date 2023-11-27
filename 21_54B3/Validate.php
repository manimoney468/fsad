<?php
$user=$_POST['t1'];
$pwd=$_POST['t2'];
$uname_pat='/^[a-zA-Z0-9 ]{5,13}$/';
$pwd_pat='/^[a-zA-Z0-9@$& ]{5,13}$/';
$flag=true;
if(empty($user)) {
$flag=false;
echo "PLEASE Enter the user name ";
}
else if(empty($pwd)) {
$flag=false;
echo "PLEASE Enter the password ";
}
else if(preg_match($uname_pat,$user)==false) {
$flag=false;
echo "Please Enter UserName Format";
}
else if(preg_match($pwd_pat,$pwd)==false) {
$flag=false;
echo "Please Enter Password Format";
}
else if($flag==true) {
echo "All Details are valid";
}
?>
