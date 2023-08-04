<?php
session_start();

$username=$_SESSION['username'];
echo $username.'Hello';
$dbqunm=$_POST['qunm'];
echo $dbqunm.'Hello';
$dbques=$_POST['ques'];
echo $dbques.'Hello';
$dbans=$_POST['ans'];
echo $dbans.'Hello';

$host='localhost';
$user='root';
$pass='';
$db='mca';
$con=mysqli_connect($host,$user,$pass,$db);
if(mysqli_connect($host,$user,$pass,$db))
    echo "database connected";
else {
    echo "database failed";
}
$Query="insert into doubtqa(qunm,ques,aunm,ans) values('$dbqunm','$dbques','$username','$dbans')";
mysqli_query($con, $Query)or die(mysqli_error($con));
 header("Location:upostans.php");

?>
