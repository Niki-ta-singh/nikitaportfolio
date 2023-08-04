
<?php session_start() ?>
<?php $username=$_SESSION['username'];
?>
<h1>welcome &nbsp;&nbsp;<?php echo $username ?></h1>
<body background="bg.jpg">
    <table>
        <tr><td align="center" width="500" heigth="250"><a href="ucview.php"><image src='download.png' width="200" heigth="150"><br><br>Content</a> </td><td width="500" heigth="250"><a href="utsview.php"><image src='online2.png' width="200" heigth="150"><br><br>Test Series</a></td><td align="center"width="500" heigth="250"><a href="usercpass.php"><image src='changepassword.png' width="200" heigth="150"><br><br><br><br>Change Password</a></td><td width="500" heigth="250"><a href="index.php" target="_top"><image src='logout.png' width="200" heigth="150"><br>Logout</a></td></tr>
    </table>
   
</body>