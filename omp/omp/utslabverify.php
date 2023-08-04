<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$count=$_POST['c'];
$rs=$_POST['start'];
$re=$rs+$count;
//echo $rs;
//echo $re;
//echo $count.'Hello';
 //echo '\n' ;
 $right=0;
$wrong=0;
for($j=$rs;$j<$re;$j++)
{
    $id='id'.$j;
 $idid=$_POST[$id];   
 //echo     $idid;
 $sub='s'.$j;
 $subsub=$_POST[$sub]; 
 //echo $subsub;
  $level='l'.$j;
 $levellevel=$_POST[$level]; 
 //echo  $levellevel;
 
  $ques='q'.$j;
 $quesques=$_POST[$ques]; 
  //echo   $quesques;
   $quesid='qi'.$j;
  $quesidquesid=$_POST[$quesid]; 
  //echo  $quesidquesid;
  $ans='an'.$j;
  $ansans=$_POST[$ans]; 
   //echo  $ansans;
 //  $o1='o1'.$j;
   
//   $op1op1=$_POST[$o];
 ///  echo   $op1op1;
 //    $o2='o2'.$j;
     /*
     $op2op2=$_POST[$o];
   echo  $op2op2;
    $o3='o3'.$j;
     $op3op3=$_POST[$o];
   echo $op3op3;
     $o4='o4'.$j;
     $op4op4=$_POST[$o4];
   echo $op4op4 ;
    echo 'break' ;
    */
  error_reporting(0);
  $option='$j'.$j;
  $option=$_POST[$j];
//echo 'ans';
 // echo $ansans;
  //echo 'ques';
    //echo $option;
  

if($ansans==$option)
{
    $right++;
}
 else {
    $wrong++;
}
}
//echo "right=".$right;
//echo "wrong=".$wrong;
?>

<?
$host='localhost';
$user='root';
$pass='';
$db='mca';
$con=mysqli_connect($host,$user,$pass,$db);


?>
<body background="bg.jpg">
    <font face="Allura" size='5'>
<center>    <H1>RESULT</h1>
    Correct Answers &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $right;?><br>
     Incorrect Answers &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $wrong;?><br>
</body>