<?php
session_start();

$username=$_SESSION['username'];
echo $username.'Hello';
$dbques=$_POST['ques'];
echo $opd.'Hello';

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
$Query="insert into ques(qunm,ques) values('$username','$dbques')";
mysqli_query($con, $Query);
header("Location:uaddques.php");
?>
