<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$dbcid=$_POST['cid'];
echo  "cid=".$dbcid;
//$dbcid='02';
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
$query="delete from content where contentid='".$dbcid."'";
  mysqli_query($con, $query)or die(mysqli_error($con));
  header("Location:adminmain.php");
?>