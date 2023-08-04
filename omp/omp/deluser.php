<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$dbunm=$_POST['unm'];
echo  "unm=".$dbunm;
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
$query="delete from user where uid='".$dbunm."'";
  mysqli_query($con, $query)or die(mysqli_error($con));
      header("Location:adminmain.php");
?>