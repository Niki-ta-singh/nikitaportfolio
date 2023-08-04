<?php

session_start();
      
$username=$_SESSION['adminname'];
//echo $username;
$host='localhost';
$pass='';
$user='root';
$db='mca';
$con=  mysqli_connect($host, $user, $pass, $db);
$querry="select * from content";
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
        <th>content id</th>
        <th>subject</th>
        <th>topic</th>
        <th>keyterms</th>
        
        
    </tr>
    
    
    <?php


while($row= mysqli_fetch_array($result))
{
    $dbcid = $row[0];
    $dbsub = $row[1];
    $dbtopic = $row[2];
    $dbnotes = $row[3];
    $dbktrm = $row[4];
    
    ?>
    <form name="f1" method="post" action="acdelverify.php">
    <tr>
        
        <td> <?php  echo $dbcid; ?> &nbsp; </td>
        <td> <?php  echo $dbsub; ?> &nbsp;</td>
        <td> <?php  echo $dbtopic; ?> &nbsp;</td>
        
        <td> <?php  echo $dbktrm; ?> &nbsp;</td>
    <input  type="hidden" name="cid" value="<?php echo $dbcid ?>">
    <td><input  type="submit" name="del" value="delete"></td>
    </tr>
    </form>
<?php
    }
    
?>
</table>
     <input type="image" src='back.png' width="50" height="20" <a href="#" onclick="history.back();" value="back" id="back"></a>
 </body>



 

    
  

