<?php
session_start();
$username=$_POST['username'];
echo $username.'Hello';
$password=$_POST['password'];
echo $password.'Hello';
$d=date('d.m.Y');
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
$Query="Select * from user where uid='".$username."'";
$result=mysqli_query($con,$Query);
while($row=mysqli_fetch_array($result))
{
    $dbuser=$row['uid'];
    $dbpass=$row['pwd'];
    echo $dbuser;                    
echo $dbpass;

}
if($username==$dbpass && $password==$dbpass)
{
    echo 'login successful';
    $_SESSION['username']=$username;
    $Query1="insert into log(unm,activity,date) values('$username','Slogin','$d')";
mysqli_query($con, $Query1)or die(mysqli_error($con));
    header("Location:userhome.php");
}
 else {
    echo 'login failed';
    $Query2="insert into log(unm,activity,date) values('$username','Flogin','$d')";
    mysqli_query($con, $Query2)or die(mysqli_error($con));
    header("Location:index.php");
}

?>