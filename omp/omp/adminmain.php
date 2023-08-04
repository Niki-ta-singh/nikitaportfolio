<?php session_start() ?>
<?php $username=$_SESSION['adminname'];
?>
<h1>welcome&nbsp;<?php echo $username ?></h1>
<?php

$host='localhost';
$pass='';
$user='root';
$db='mca';
$con=  mysqli_connect($host, $user, $pass, $db);
$querry="select * from log";
$result=  mysqli_query($con, $querry);
?>
    <body background="bg.jpg">
<table>
    
    
    
    <?php


while($row= mysqli_fetch_array($result))
{
    $dbunm = $row[0];
    $dbactivity = $row[1];
    $dbdate = $row[2];
    
    ?>
    
   
       
       
<?php
    }
    $slogin='Slogin';
$querry1="select count(*) from log where activity='".$slogin."'";
$result1=  mysqli_query($con, $querry1);
$count1=0;
while($row1= mysqli_fetch_array($result1))
{
    $count1 = $row1[0];
}
//echo "count of slogin=".$count1;
$flogin='Flogin';
$querry2="select count(*) from log where activity='".$flogin."'";
$result2=  mysqli_query($con, $querry2);
$count2=0;
while($row2= mysqli_fetch_array($result2))
{
    $count2 = $row2[0];
}
//echo "count of flogin=".$count2;
$reg='reg';
$querry3="select count(*) from log where activity='".$reg."'";
$result3=  mysqli_query($con, $querry3);
$count3=0;
while($row3= mysqli_fetch_array($result3))
{
    $count3 = $row3[0];
}
//echo "count of reg=".$count3;
$test='test';
$querry4="select count(*) from log where activity='".$test."'";
$result4=  mysqli_query($con, $querry4);
$count4=0;
while($row4= mysqli_fetch_array($result4))
{
    $count4 = $row4[0];
}
//echo "count of $test=".$count4;
$total=$count1+$count2+$count3+$count4;
$pslogin=($count1/$total)*100;
//echo "Percentage of Slogin=".$pslogin."%";
$pflogin=($count2/$total)*100;
//echo "Percentage of Flogin=".$pflogin."%";
$preg=($count3/$total)*100;
//echo "Percentage of reg=".$preg."%";
$ptest=($count4/$total)*100;
//echo "Percentage of test=".$ptest."%";
?>
       
        
       
</table>


<div id="piechart"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['succesful login', <?php echo $pslogin;?>],
  ['unsuccesful login', <?php echo $pflogin;?>],
  ['register', <?php echo $preg;?>],
  ['test ', <?php echo $ptest;?>]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Activity Chart', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

    </body>
 

    
  

