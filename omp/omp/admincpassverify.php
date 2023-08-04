<?php

session_start();

$adminusername=$_SESSION['adminname'];
echo $adminusername.'Hello';
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
$Query="Select * from admin where unm='".$adminusername."'";
$result=mysqli_query($con,$Query);
while($row=mysqli_fetch_array($result))
{
    $dbuser=$row['unm'];
    $dbpass=$row['pwd'];
    echo $dbuser;                    
echo $dbpass;

}
if($dbpass==$opd)
{
   $Query="update admin set pwd='".$npd."' where unm='".$adminusername."'";
mysqli_query($con,$Query) or die(mysqli_error($con));
      echo 'password changed';
   
    
    header("Location:adminhome.php");
}
 else {
    echo 'enter correct old password';
    header("Location:admincpass.php");
}


?>