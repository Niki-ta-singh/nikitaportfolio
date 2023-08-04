<?php session_start() ?>
<?php $username=$_SESSION['username'];
?>
<HTML>
<BODY background="bg.jpg">
    <font face="Comic Sans MS">
<HEAD><TITLE>My Page</TITLE>
     <STYLE>
    .back {
    position: fixed;
    bottom: 30px;
    right:  0px; 
}
    </style>
     <body bgcolor ="pink"> 
    <SCRIPT language="Javascript">
       function fun()
       {
           var pd=document.f1.opwd.value;
           var npd=document.f1.npwd.value;
           var rnpd=document.f1.rnpwd.value;
        if(pd=="" || pd.length<8)
           {
           alert("please enter old password");
           return false;
       } 
       else if(npd=="" || npd.length<8)
           {
           alert("please enter valid new password");
           return false;
       }
       else if(!npd==rnpd)
           {
           alert("password didnt matched");
           return false;
       }
       return true;
       }
       </SCRIPT>
</HEAD>
<h1>Welcome&nbsp;&nbsp;<?php echo $username ?></h1>
<PRE><CENTER><FORM method="post" target="_top" action="usercpassverify.php" onSubmit="return fun()" name="f1" ><font face="Comic Sans MS">
<H1>CHANGE PASSWORD</H1>    
Old Password                    <input type="password" name="opwd" value=""> <BR>
New Password                    <input type="password" name="npwd" value=""> <BR>
Re-enter New Password     <input type="password" name="rnpwd" value=""> <BR>
        <input type ="submit" name="submit" value="change password"></FORM></CENTER>
</PRE>
 <input type="image" src='back.png' width="50" height="20" <a href="#" onclick="history.back();" value="back" id="back"></a>
</BODY>
</HTML>
