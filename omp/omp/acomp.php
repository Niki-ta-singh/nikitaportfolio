<?php

session_start();
      
$comp='comp';
$host='localhost';
$pass='';
$user='root';
$db='mca';
$con=  mysqli_connect($host, $user, $pass, $db);
$querry="select * from content";
$result=  mysqli_query($con, $querry);
?> 
<?php
$querry1="select * from content where sub='".$comp."'";
$result1=  mysqli_query($con, $querry1);
?> 
<body background="login.jpg">
<font face="Allura">
<h2>Please Choose Topic</h2>
<form name="f1" target="cmain" action="acompcontent.php" method="post">
<select name="topic">

    <?php

while($row1= mysqli_fetch_array($result1))
{
//    $dbcid = $row[0];
  //  $dbsub = $row[1];
    $dbtitle = $row1[2];
  //  $dbnotes = $row[3];
  //  $dbktrs = $row[4];
  ?>
    <option>  <?php echo $dbtitle ?> </option>
    <?php
    
    ?>
 <?php
    }
?>
</select>
    <input type="submit" name="submit" value="select">
     </form><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<a href="acview.php" target="main"><input type="image" src='back.png' width="50" height="20" ></a>
</body>