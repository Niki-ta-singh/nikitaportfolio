<?php
session_start();

$username=$_POST['username'];
echo $username.'Hello';
$password=$_POST['password'];
echo $password.'Hello';
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
$Query="Select * from admin where unm='".$username."'";
$result=mysqli_query($con,$Query);
while($row=mysqli_fetch_array($result))
{
    $dbuser=$row['unm'];
    $dbpass=$row['pwd'];
    echo $dbuser;                    
echo $dbpass;

}
if($username==$dbuser && $password==$dbpass)
{
    echo 'login successful';
    $_SESSION['adminname']=$username;
    header("Location:adminhome.php");
}
 else {
    echo 'login failed';
    header("Location:adminlogin.php");
}

?>