<?php

session_start();
      
$resn='resn';
$host='localhost';
$pass='';
$user='root';
$db='mca';
$con=  mysqli_connect($host, $user, $pass, $db);
$querry="select * from content";
$result=  mysqli_query($con, $querry);
?> 
<body background="7.jpg">
    <font face="Allura">
<?php
$querry1="select * from content where sub='".$resn."'";
$result1=  mysqli_query($con, $querry1);
?> 
<h2>Please Choose Topic</h2>
<form name="f1" target="cmain" action="resncontent.php" method="post">
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
</form>
<br><br><br><br><br><br><br><br><br><br><br><br>
<a href="ucview.php" target="main1"><input type="image" src='back.png' width="50" height="20" ></a>
</body>