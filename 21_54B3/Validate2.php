<?php
$fn=$_POST['t1'];
$ln=$_POST['t2'];
$pwd=$_POST['t3'];
$mob=$_POST['t4'];
$mail=$_POST['t5'];
$fn_pat='/^[a-zA-Z][a-zA-Z0-9 ]{5,30}$/';
$ln_pat='/^[a-zA-Z][a-zA-Z0-9]{5,30}$/';
$pwd_pat='/^[a-zA-Z0-9@$& ]{5,20}$/';
$mob_pat='/^\d{10}$/';
$mail_pat='/^[A-Za-z0-9]+@[A-Za-z]+.[A-Za-z]{2,4}$/';
$flag=true;
if(empty($fn)) {
$flag=false;
echo "Enter the First name PLEASE";
}
else if(empty($ln)) {
$flag=false;
echo "Enter the LastPLEASE";
}
else if(empty($pwd)) {
$flag=false;
echo "Enter the password PLEASE";
}
else if(empty($mob)) {
$flag=false;
echo "Enter the Mobile NumberPLEASE";
}
else if(empty($mail)) {
$flag=false;
echo "Enter the E-Mail PLEASE";
}
else if(preg_match($fn_pat,$fn)==false) {
$flag=false;
echo "Please Enter First Name in Given Format";
}
else if(preg_match($ln_pat,$ln)==false) {
$flag=false;
echo "Please Enter Last Name in Given Format";
}
else if(preg_match($pwd_pat,$pwd)==false) {
$flag=false;
echo "Please Enter Password in Given Format";
}
else if(preg_match($mob_pat,$mob)==false) {
$flag=false;
echo "Please Enter Mobile in Given Format";
}
else if(preg_match($mail_pat,$mail)==false) {
$flag=false;
echo "Please Enter Mail in Given Format";
}
else if($flag==true) {
echo "All details are valid";
}
?>
