<html>
    <head><title>My page</title>
        <STYLE>
    .back {
    position: fixed;
    bottom: 30px;
    right:  0px; 
}
    </style>
        <script language="javascript">
            function fun()
            {
                var unm=document.f1.username.value;
                var pas=document.f1.password.value;
                cont=document.f1.contact.value;
                var name=document.f1.name.value;
                var email=document.f1.email.value;
                var len=unm.length; 
                var lenem=email.length;
                var sp=0;
                var i,c,co=0;
                var attherate=0 , sp=0,atrcount=0;
                
                if(cont > 999999999 && cont < 9999999999)
            {
              co=1;  
        }
                for(i=0;i<len;i++)
                {
                    c = unm.charAt(i);
                    if(c==" "){
                        sp=1;
                       
                    }
                }
                 for(j=0;j<lenem;j++)
                {
                    a = email.charAt(j);
                    if(a=='@'){
                        attherate=1;
                        atrcount++
                       
                    }
                }
                
                
                if(unm=="")
                { alert("please enter username");
                    return false;
                
        }
        
        if(cont=="")
                { alert("please enter contact");
                    return false;
                
        }
        
        
      // con= Integer.parseInt(cont);
         else if(co==0)
            {
                alert("please enter  correct contact no.");
                return false;
            }
         else if(sp==1)
                { alert("please enter  correct username");
                    return false;
                }
                else if(pas==""|| pas.length<8)
                { alert("please enter password");
                    return false;
                }
                else if(name=="")
            {
                alert("please enter  name");
                return false;
            }
           else if(email=="")
            {
                alert("please enter  email");
                return false;
            }
           else if(attherate==0)
            {
                alert("please enter valid  email");
                return false;
            }
            else if(atrcount!=1)
            {
                alert("please enter valid  email");
                return false;
            }
     /*       else if(sp==0)
            {
                alert("please enter valid  email");
                return false;
            }
            else if(charvalid==1)
            {
                alert("please enter valid  email");
                return false;
            }*/
            
                return true;
            }
            
            
    </script>
        
</head>
    <body>
    <body background="7.jpg"> 
<pre><form name="f1" target="admin" method="post" action="regverify.php" onSubmit="return fun()">
<center><font face="Allura"><h1> REGISTER</h1>
Username <input type="text" name ="username" value=""><br>
Name     <input type="text" name ="name" value=""><br>
Password <input type="password" name="password" value=""><br>
Contact  <input type="text" name ="contact" value=""><br>
Email    <input type="text" name ="email" value=""><br>
<input type ="image" src='register.png' width="170" height="50"></font> </center></form></pre>
     
    </body>
    <input type="image" src='back.png' width="50" height="20" <a href="#" onclick="history.back();" value="back" id="back"></a>
</html>



