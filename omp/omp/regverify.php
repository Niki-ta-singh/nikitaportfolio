<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$username=$_POST['username'];
echo "your username is:".$username;
$password=$_POST['password'];
echo  "your password is:".$password;
$name=$_POST['name'];
echo  "your name is:".$name;
$contact=$_POST['contact'];
echo  "your contact is:".$contact;
$email=$_POST['email'];
echo  "your email is:".$email;
$d=date('d.m.Y');
$host='localhost';
$user='root';
$pass='';
$db='mca';
$con=mysqli_connect($host,$user,$pass,$db);

$Query="insert into user(uid,name,pwd,contact,email) values('$username','$name','$password',$contact,'$email')";
mysqli_query($con, $Query)or die(mysqli_error($con));
$Query1="insert into log(unm,activity,date) values('$username','reg','$d')";
mysqli_query($con, $Query1)or die(mysqli_error($con));
header("location:userlogin.php");

?>