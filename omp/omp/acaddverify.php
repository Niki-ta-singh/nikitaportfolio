<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$conid=$_POST['contentid'];
echo "your contentid is:".$conid;
$sub=$_POST['subject'];
echo  "your sub is:".$sub;
$topic=$_POST['topic'];
echo  "your topic is:".$topic;
$notes=$_POST['notes'];
echo  "your notes is:".$notes;
$keyterms=$_POST['keyterms'];
echo  "your keyterms is:".$keyterms;
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
$Query="insert into content(contentid,sub,topic,notes,keyterms) values('$conid','$sub','$topic','$notes','$keyterms')";
mysqli_query($con, $Query)or die(mysqli_error($con));
header("location:adminmain.php");

?>
