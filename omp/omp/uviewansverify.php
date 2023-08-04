<?php
session_start();
$dbqunm=$_POST['qunm'];
//echo $dbqunm.'Hello';
$dbques=$_POST['ques'];
//echo $dbques.'Hello';
$host='localhost';
$pass='';
$user='root';
$db='mca';
$con=  mysqli_connect($host, $user, $pass, $db);
$querry="select * from doubtqa where ques='".$dbques."'";
$result=  mysqli_query($con, $querry);
 ?>
<body background="bg.jpg"><font face="Comic Sans MS" >
<table><tr> <td>Question by &nbsp; <?php  echo $dbqunm; ?> &nbsp; </td></tr>
<tr> <td>Ques: &nbsp;<?php  echo $dbques; ?> &nbsp;</td></tr><br>
</table>
<?php
while($row= mysqli_fetch_array($result))
{
    $dbqunm = $row[0];
    $dbques = $row[1];
    $dbaunm = $row[2];
    $dbans = $row[3];
 ?> 
  <table>
<tr> <td>Answer by&nbsp;<?php  echo $dbaunm; ?></td></tr>
      <tr> <td>Answer:&nbsp;<?php  echo $dbans; ?></td></tr>
      <?php
}   
?>   
</table>
      <input type="image" src='back.png' width="50" height="20" <a href="#" onclick="history.back();" value="back" id="back"></a>
  

