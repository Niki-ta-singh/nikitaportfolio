
<?php


session_start();
$topic=$_POST['topic'];
$dbsub='maths';
$host='localhost';
$pass='';
$user='root';
$db='mca';
$con=  mysqli_connect($host, $user, $pass, $db);

$querry2="select * from content where sub='".$dbsub."' and topic='".$topic."'";
$result2=  mysqli_query($con, $querry2);
?> 
    <?php

while($row2= mysqli_fetch_array($result2))
{
//    $dbcid = $row[0];
  //  $dbsub = $row[1];
//    $dbtitle = $row1[2];
    $dbnotes = $row2[3];
    $dbktrs = $row2[4];
  ?>
    <body background="bg.jpg">
  <table><font face="Comic Sans MS" size="4">
      <tr> <h1>Keyterms</h1></tr>
        <tr><?php echo $dbktrs ?></tr>
   <tr><h1> Notes<h1></tr>
   <tr><?php echo $dbnotes ?> </tr>
    </font>
</table>
 <?php
    }
?>
