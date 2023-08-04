<HTML>
<BODY>
<HEAD><TITLE>My Page</TITLE>
     <body background="7.jpg"> 
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
<PRE><CENTER><FORM method="post" target="_top" action="userloginverify.php" onSubmit="return fun()" name="f1" >
<FONT face="Allura"> <b><H1>USER LOGIN</H1>    
Username &nbsp;&nbsp;<input type="text" name="username" value=""> <BR>
Password &nbsp;&nbsp;<input type="password" name="password" value=""> <br>
<input type ="image" src='signin.png' width="170" height="50"><br></B></font></FORM>
<a href="reg.php"><input type ="image" src='signup.png' width="170" height="50"></a>
</CENTER></PRE>
</BODY>
</HTML>
