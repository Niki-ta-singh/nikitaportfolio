<?php

session_start();
      

$host='localhost';
$pass='';
$user='root';
$db='mca';
$con=  mysqli_connect($host, $user, $pass, $db);

$querry="select * from ques";
$result=  mysqli_query($con, $querry);
?>
<body background="bg.jpg"><font face="Comic Sans MS" >
    <div style="box-shadow: 5px 5px 10px white; " >
<table>
    
    
    <?php


while($row= mysqli_fetch_array($result))
{
    $dbqunm = $row[0];
    $dbques = $row[1];
   
    ?>
    
    <form name="f1" target="main2" method="post" action="uviewansverify.php" onSubmit="">

    <tr>
    
<td>Question by <?php  echo $dbqunm; ?> &nbsp; </td></tr>
    <tr> <td>ques: <?php  echo $dbques; ?> &nbsp;</td></tr>
    
    <tr> <td> 
            <input type="hidden" name="qunm" value="<?php  echo $dbqunm; ?>">
            <input type="hidden" name="ques" value="<?php  echo $dbques; ?>">
            
            
           
    <td> <input type="submit" name ="view" value ="view"></td>
        
    </tr>
    </form>
    <form name="f2" target="main2" method="post" action="upostansverify.php" onSubmit="">

   
    
    <tr> <td>Post our answer:</td></tr>
    <tr> <td> 
            <input type="hidden" name="qunm" value="<?php  echo $dbqunm; ?>">
            <input type="hidden" name="ques" value="<?php  echo $dbques; ?>">
            
            <textarea cols="25" rows="5" name="ans"></textarea></td></tr>
    <td> <input type="submit" name ="post" value ="post"></td>
        
 
    </form>
    
    
<?php
    }
?>
</table>
    </div>
</body>


    
  

