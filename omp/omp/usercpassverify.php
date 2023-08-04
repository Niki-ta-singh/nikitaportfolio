<?php
session_start();

$username=$_SESSION['username'];
echo $username.'Hello';
$opd=$_POST['opwd'];
echo $opd.'Hello';
$npd=$_POST['npwd'];
echo $npd.'Hello';
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
if($dbpass==$opd)
{
$Query="update user set pwd='".$npd."' where uid='".$username."'";
mysqli_query($con,$Query) or die(mysqli_error($con));
      echo 'password changed';
    header("Location:userhome.php");
}
 else {
    echo 'enter correct old password';
   header("Location:usercpass.php");
}

?>