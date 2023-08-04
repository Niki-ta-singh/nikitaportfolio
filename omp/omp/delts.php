<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$dbtsid=$_POST['tsid'];
echo  "tsid=".$dbtsid;
$dbsub=$_POST['sub'];
echo  "sub=".$dbsub;
$dbques=$_POST['ques'];
echo  "ques=".$dbques;
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
$query="delete from testseries where tsid='".$dbtsid."'";
  mysqli_query($con, $query)or die(mysqli_error($con));
    header("Location:adminmain.php");
?>