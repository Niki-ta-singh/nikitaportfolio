<html>
    <STYLE>
    .back {
    position: fixed;
    bottom: 0px;
    right:  0px; 
}
    </style>
<body>
    <body background="bg.jpg"> 
        <pre><form name="f1" target="main" method="post" action="atsaddverify.php" onSubmit=""><center><h2>ADD QUESTION DETAILS</h2> 
test series ID  <input type="text" name ="tsid" value=""><br>
Subject         <input type="text" name ="sub" value=""><br>
Level           <input type="text" name ="level" value=""><br>
<table><tr>
Question ID     <input type="text" name ="quesid" value=""><br>
<td>Question</td>
        <td><textarea cols="50" rows="5" name ="ques" value=""></textarea><br></td>
    </tr>
</table> 

 Option1     <input type="text" name ="option1" value="">&nbsp;     Option2  <input type="text" name ="option2" value=""><br>
 Option3     <input type="text" name ="option3" value="">&nbsp;     Option4  <input type="text" name ="option4" value=""><br>
Answer      <input type="text" name="answer" value=""><br>
<input type="submit" name ="submit" value ="Add">
                </center>
               
</form>
               </pre>
    </body>
    <input type="image" src='back.png' width="50" height="20" <a href="#" onclick="history.back();" value="back" id="back"></a>
</html>

