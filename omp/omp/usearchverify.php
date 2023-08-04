<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$search=$_POST['search'];
//echo  "search=".$search;
$host='localhost';
$user='root';
$pass='';
$db='mca';
$con=mysqli_connect($host,$user,$pass,$db);
?>
<body background="bg.jpg">
    <font face="Comic Sans MS" size="4">
    <?php
$query="select * from content where keyterms like '%".$search."%'";
$result=  mysqli_query($con, $query);
while($row= mysqli_fetch_array($result))
{
//    $dbcid = $row[0];
  //  $dbsub = $row[1];
  //  $dbtitle = $row[2];
    $dbnotes = $row[3];
  // $dbktrs = $row[4];
  ?>
<p>
     
    <table>
      
        <tr><td><h1> notes<h1></td></tr>
   <tr><td><?php echo $dbnotes ?></td> </tr>
    </font>
</table> 
</p>
 <?php
    }
   
?>
  <a href="umain.php" target="main1"><input type="image" src='back.png' width="50" height="20" ></a>
</body>