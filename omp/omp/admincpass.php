<?php session_start() ?>
<?php $adminname=$_SESSION['adminname'];
?>

<HTML>
    <STYLE>
    .back {
    position: fixed;
    bottom: 0px;
    right:  0px; 
}
    </style>
<BODY background="bg.jpg">
<HEAD><TITLE>My Page</TITLE>
      
    <SCRIPT language="Javascript">
       function fun()
       {
           var pwd=document.f1.opwd.value;
           var npwd=document.f1.npwd.value;
           var rnpwd=document.f1.rnpwd.value;
        if(pwd=="" || npwd.length<8)
           {
           alert("please enter old password");
           return false;
       } 
       else if(npwd=="" || npwd.length<8)
           {
           alert("please enter valid new password");
           return false;
       }
       else if(!npwd==rnpwd)
           {
           alert("password didnt matched");
           return false;
       }
       return true;
       }
       </SCRIPT>
</HEAD>
<PRE>
<CENTER>
    <FORM method="post" target="_top" action="admincpassverify.php" onSubmit="return fun()" name="f1" >
    <H1>CHANGE PASSWORD</H1>    
Old Password          <input type="password" name="opwd" value=""> <BR>
New Password          <input type="password" name="npwd" value=""> <BR>
Re-enter New Password <input type="password" name="rnpwd" value=""> <BR>
        <input type ="submit" name="submit" value="change password">
</FORM>
    </CENTER>
</PRE>
</BODY>
<input type="image" src='back.png' width="50" height="20" <a href="#" onclick="history.back();" value="back" id="back"></a>
</HTML>
