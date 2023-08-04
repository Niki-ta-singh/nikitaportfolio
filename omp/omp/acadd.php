<html>
    <head><title>My page</title>
       <STYLE>
    .back {
    position: fixed;
    bottom: 0px;
    right:  0px; 
}
    </style>
        
</head>
    <body>
    <body background="bg.jpg"> 
        <pre><form name="f1" target="main" method="post" action="acaddverify.php" onSubmit=""><center><h2> ADD CONTENT</h2>
contentid   <input type="text" name ="contentid" value=""><br>
subject     <input type="text" name ="subject" value=""><br>
topic       <input type="text" name="topic" value=""><br>
notes       <textarea cols="50" rows="10" name="notes"></textarea><br>
keyterms    <input type="text" name ="keyterms" value=""><br>
<input type="submit" name ="submit" value ="save"></center></form></pre>
<input type="image" src='back.png' width="50" height="20" <a href="#" onclick="history.back();" value="back" id="back"></a>
    </body>
</html>



