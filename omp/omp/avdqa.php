<?php

session_start();
      
$username=$_SESSION['adminname'];
//echo $username;
$host='localhost';
$pass='';
$user='root';
$db='mca';
$con=  mysqli_connect($host, $user, $pass, $db);
$querry="select * from doubtqa";
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
        <th>Question Username</th>
        <th>Question</th>
        <th>Answer Username</th>
        <th>Answer</th>
        
        
    </tr>
    
    
    <?php


while($row= mysqli_fetch_array($result))
{
    $dbqunm = $row[0];
    $dbques = $row[1];
    $dbaunm = $row[2];
    $dbans = $row[3];
   
    ?>
    <form method="post" target="main" action="delqa.php" onSubmit="" name="f1" >
    <tr>
        <td> <?php  echo $dbqunm; ?> &nbsp; </td>
        <td> <?php  echo $dbques; ?> &nbsp;</td>
        <td> <?php  echo $dbaunm; ?> &nbsp;</td>
        <td> <?php  echo $dbans; ?> &nbsp;</td>
        <input type="hidden" name="qunm" value="<?php  echo $dbqunm; ?>">
        <input type="hidden" name="ques" value="<?php  echo $dbques; ?>">
        <input type="hidden" name="aunm" value="<?php  echo $dbaunm; ?>">
        <input type="hidden" name="ans" value="<?php  echo $dbans; ?>">
        <td><input  type ="submit" name="delete" value="delete"></td>
    </tr>
    </form>
     
<?php
    }
?>
</table>
    <input type="image" src='back.png' width="50" height="20" <a href="#" onclick="history.back();" value="back" id="back"></a>
</body>



 

    
  

