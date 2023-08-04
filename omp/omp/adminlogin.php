<HTML>
<BODY>
<HEAD><TITLE>My Page</TITLE>
    <STYLE>
    .back {
    position: fixed;
    bottom: 0px;
    right:  0px; 
}
    </style>
     <body  background="7.jpg"> 
    <SCRIPT language="Javascript">
       function fun()
       {
           var username=document.f1.username.value;
           var password=document.f1.password.value;
           var sp=0, len=0, i=0, c;
           len=username.length;
           for(i=0;i<len;i++)
           {
               c=username.charAt(i);
               if(c==' ')
                   sp=1;
           }
           if(username=="")
           {
           alert("please enter username");
           return false;
       }
       else if(password=="" || password.length<8)
           {
           alert("please enter password");
           return false;
       }
       else if(sp==1)
          {
           alert("enter username without space");
           return false;
       } 
       return true;
       }
       </SCRIPT>
</HEAD>
<PRE><CENTER><FORM method="post" target="_top" action="adminloginverify.php" onSubmit="return fun()" name="f1" >
<FONT face="Allura"> <b><H1>ADMIN LOGIN</H1>    
Username <input type="text" name="username" value=""> <BR>
Password <input type="password" name="password" value=""> <BR>
<input type ="image" src='login.png' width="170" height="50"><br>

</B></font></FORM>
    </CENTER>
</PRE>
<input type="image" src='back.png' width="50" height="20" <a href="#" onclick="history.back();" value="back" id="back"></a>
</BODY>
</HTML>
