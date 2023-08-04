<?php
$tsid=$_POST['tsid'];
echo $tsid.'Hello';
$sub=$_POST['sub'];
echo $sub.'Hello';
$level=$_POST['level'];
echo $level.'Hello';
$quesid=$_POST['quesid'];
echo $quesid.'quesid';
$ques=$_POST['ques'];
echo $ques.'Hello';
$option1=$_POST['option1'];
echo $option1.'Hello';
$option2=$_POST['option2'];
echo $option2.'Hello';
$option3=$_POST['option3'];
echo $option3.'Hello';
$option4=$_POST['option4'];
echo $option4.'Hello';
$answer=$_POST['answer'];
echo $answer.'Hello';
$host='localhost';
$user='root';
$pass='';
$db='mca';
$con=mysqli_connect($host,$user,$pass,$db);
if(mysqli_connect($host,$user,$pass,$db))
    echo "database connected";
else {
    echo "database failed";
}
$Query="insert into testseries(tsid, subject,level ,ques ,quesid , answer ,option1 ,option2 ,option3 ,option4 ) values('$tsid','$sub',$level,'$ques','$quesid','$answer','$option1','$option2','$option3','$option4')";
mysqli_query($con, $Query)or die(mysqli_error($con));
header("Location:adminmain.php");
?>