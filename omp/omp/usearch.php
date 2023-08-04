<html>
    <body background="bg.jpg">
        <script language="javascript">
            function fun()
            {
                var val=document.f1.search.value;
                if(val=="")
                { alert("please enter topic to be searched");
                    return false;
                }
         return true;
            }
            </script>
        <form name="f1" target="main1" method="post" action="usearchverify.php" onSubmit="return fun()">
        <table width="100%" height="100%">
            <td align="right">Search &nbsp;&nbsp;<input type="text" name ="search" value="">
<input type ="image" src='go.png' width="50" height="20"></td>        </table>  
        </form>
       </body>
   </html>