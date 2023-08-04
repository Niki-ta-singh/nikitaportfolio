<?php

session_start();
      
 $username=$_SESSION['adminname'];
//echo $username;
$host='localhost';
$pass='';
$user='root';
$db='mca';
$con=  mysqli_connect($host, $user, $pass, $db);
$querry="select * from user";
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
        <th>USERNAME</th>
        <th>NAME</th>
        <th>CONTACT</th>
        <th>EMAIL</th>
        
    </tr>
    
    
    <?php


while($row= mysqli_fetch_array($result))
{
    $dbunm = $row[0];
    $dbname = $row[1];
    $dbcontact = $row[3];
    $dbemail = $row[4];
    ?>
    <form method="post" target="main" action="deluser.php" onSubmit="" name="f1" >
    <tr>
        <td> <?php  echo $dbunm; ?> &nbsp; </td>
        <td> <?php  echo $dbname; ?> &nbsp;</td>
       
        <td> <?php  echo $dbcontact; ?> &nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td> <?php  echo $dbemail; ?> &nbsp;</td>
       <input type="hidden" name="unm" value="<?php  echo $dbunm; ?>">
        
        <td><input  type ="submit" name="delete" value="delete"></td>
    </tr>
     </form>
<?php
    }
?>
</table>
<input type="image" src='back.png' width="50" height="20" <a href="#" onclick="history.back();" value="back" id="back"></a>    
</body>



 

    
  

