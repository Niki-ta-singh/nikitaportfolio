<?php

session_start();
      
$username=$_SESSION['adminname'];
//echo $username;
$host='localhost';
$pass='';
$user='root';
$db='mca';
$con=  mysqli_connect($host, $user, $pass, $db);
$querry="select * from testseries";
$result=  mysqli_query($con, $querry);
?>
<STYLE>
    .back {
    position: fixed;
    bottom: 0px;
    right:  0px; 
}
    </style>
<body background="bg.jpg"> 
<table>
    <tr>
        <th>Test Series Id</th>
        <th>Subject</th>
        <th>Question</th>
  
        
        
    </tr>
    
    
    <?php


while($row= mysqli_fetch_array($result))
{
    $dbtsid = $row[0];
    $dbsub = $row[1];
    $dbques = $row[3];
    
   
    ?>
    <form method="post" target="main" action="delts.php" onSubmit="" name="f1" >
    <tr>
        <td> <?php  echo $dbtsid; ?> &nbsp; </td>
        <td> <?php  echo $dbsub; ?> &nbsp;</td>
        <td> <?php  echo $dbques; ?> &nbsp;</td>
        <input type="hidden" name="tsid" value="<?php  echo $dbtsid; ?>">
        <input type="hidden" name="sub" value="<?php  echo $dbsub; ?>">
        <input type="hidden" name="ques" value="<?php  echo $dbques; ?>">
        <td><input  type ="submit" name="delete" value="delete"></td>
    </tr>
    </form>
     
<?php
    }
?>
</table>
    <input type="image" src='back.png' width="50" height="20" <a href="#" onclick="history.back();" value="back" id="back"></a>
</body>


 

    
  

