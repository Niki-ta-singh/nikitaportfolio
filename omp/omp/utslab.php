<?php

session_start();
      
$username=$_SESSION['username'];
//echo $username;
$host='localhost';
$pass='';
$user='root';
$db='mca';
$sub='lab';
$con=  mysqli_connect($host, $user, $pass, $db);

$querry="select count(*) from testseries where subject='".$sub."'";
$result=  mysqli_query($con, $querry);
$count=0;
while($row= mysqli_fetch_array($result))
{
    $count = $row[0];
}


echo 'number of question '.$count;

    $dbtsid;
    $dbsub;
    $dblevel;
    $dbques;
    $dbquesid;
    $dbans;
    $dbop1;
    $dbop2;
   $dbop3;
   $dbop4;

for($j=0;$j<$count;$j++)
{
    $dbtsid[$j]='';
     $dbsub[$j]='';
    $dblevel[$j]='';
    $dbques[$j]='';
    $dbquesid[$j]='';
    $dbans[$j]='';
    $dbop1[$j]='';
    $dbop2[$j]='';
   $dbop3[$j]='';
   $dbop4[$j]='';
    
}


$querry1="select * from testseries where subject='".$sub."'";
$result1=  mysqli_query($con, $querry1);

$i=0;
while($row1= mysqli_fetch_array($result1))
{
    $dbtsid[$i] = $row1[0];
    $dbsub[$i] = $row1[1];
    $dblevel[$i]=$row1[2];
    $dbques[$i]= $row1[3];
    $dbquesid[$i]= $row1[4];
    $dbans[$i]= $row1[5];
    $dbop1[$i] = $row1[6];
    $dbop2[$i] = $row1[7];
   $dbop3[$i] = $row1[8];
   $dbop4[$i] = $row1[9];
  $i++;
}    
 
$rs=rand(1,2);
$re=$rs+2;
echo "random ".$rs;
echo "randm end ".$re;
$c=0;
$cnt=2;
for($j=$rs;$j<$re;$j++)
{
 //echo     $dbtsid[$j];
 //echo $dbsub[$j];
 //echo  $dblevel[$j];
  //echo   $dbques[$j];
  //echo  $dbquesid[$j];
   //echo  $dbans[$j];
  //echo   $dbop1[$j];
   //echo  $dbop2[$j];
   //echo $dbop3[$j];
   //echo $dbop4[$j] ;

   ?>
<body background="bg.jpg">
    <form method="post" target="main" action="utslabverify.php" onSubmit="" name="f1" >
        
        
        <table>
            <td><input type="hidden" name ="c" value="<?php  echo $cnt; ?>">
                <input type="hidden" name ="start" value="<?php  echo $rs; ?>">
                
                <br></td>
    <td><input type="hidden" name ="<?php echo 'id'.$j ?>" value="<?php  echo $dbtsid[$j]; ?>"><br></td>
    <td><input type="hidden" name ="<?php echo 's'.$j ?>" value="<?php  echo $dbsub[$j]; ?>"><br></td>
    <td><input type="hidden" name ="<?php echo 'l'.$j ?>" value="<?php  echo $dblevel[$j]; ?>"><br></td>
    <td><input type="hidden" name ="<?php echo 'qi'.$j ?>" value="<?php  echo $dbquesid[$j]; ?>"><br></td>
    <td><input type="hidden" name ="<?php echo 'an'.$j ?>" value="<?php  echo $dbans[$j]; ?>"><br></td>
    <td><input type="hidden" name ="<?php echo 'o1'.$j ?>" value="<?php  echo $dbop1[$j];?>"><br></td>
    <td><input type="hidden" name ="<?php echo 'o2'.$j ?>" value="<?php  echo $dbop2[$j];?>"><br></td>
    <td><input type="hidden" name ="<?php echo 'o3'.$j ?>" value="<?php  echo $dbop3[$j];?>"><br></td>
    <td><input type="hidden" name ="<?php echo 'o4'.$j ?>" value="<?php  echo $dbop4[$j];?>"><br></td>
    <tr>    
    <td>Question</td>
       
        <td> <?php  echo $dbques[$j]; ?> &nbsp;</td>
        <td><input type="hidden" name="<?php echo 'q'.$j ?>" value="<?php  echo $dbques[$j]; ?>"><br></td></tr>
    <tr><td>
     <?php  echo $dbop1[$j]; ?><input type="radio" name="<?php echo $j ?>" value=" <?php  echo $dbop1[$j]; ?>">&nbsp;       <?php  echo $dbop2[$j]; ?><input type="radio" name ="<?php echo $j ?>" value=" <?php  echo $dbop2[$j]; ?>"><br>
   <?php  echo $dbop3[$j]; ?><input type="radio" name="<?php echo $j ?>" value=" <?php  echo $dbop3[$j]; ?>">&nbsp;      <?php  echo $dbop4[$j]; ?><input type="radio" name ="<?php echo $j ?>" value="<?php  echo $dbop4[$j]; ?>"><br>
        
</td> 
        </table>
        <?php
$c++;
}

?>
<input type="hidden" name="total" value="<?php  echo $c; ?>">
</tr> <tr><td><input type="submit" name ="submit" value ="submit"></td></tr>
    
        </table>

            </form>
</body>

