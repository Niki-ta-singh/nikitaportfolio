<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$dbqunm=$_POST['qunm'];
echo  "qunm=".$dbqunm;
$dbques=$_POST['ques'];
echo  "ques=".$dbques;
$dbaunm=$_POST['aunm'];
echo  "aunm=".$dbaunm;
$dbans=$_POST['ans'];
echo  "ans=".$dbans;
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
$query="delete from doubtqa where qunm='".$dbqunm."' and ques='".$dbques."' and aunm='".$dbaunm."' and ans='".$dbans."'";
  mysqli_query($con, $query)or die(mysqli_error($con));
  header("Location:adminmain.php");
?>