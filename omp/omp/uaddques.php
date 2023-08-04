<?php session_start() ?>
<?php $username=$_SESSION['username'];
?>
<HTML>
<BODY background="bg.jpg"><font face="Comic Sans MS" >
<CENTER>
<FORM method="post" target="main3" action="uaddquesverify.php" onSubmit="" >
    <H3>POST QUESTION</H3>    
Question   <input type="text" name="ques" value="">   <input type ="submit" name="submit" value="post">
</FORM>
    </CENTER>
</BODY>
</HTML>
