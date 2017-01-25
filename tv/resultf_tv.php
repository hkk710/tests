<?php

$cot=mysqli_connect("localhost","athletics","amrita_108","athletics");

$querya="UPDATE `DEPTSCORE` SET `SCORE`=(SELECT SUM(`STUDENT`.`SCORE`) FROM `STUDENT` WHERE  `batch`='1') WHERE  `DEPT`='1'";
$queryb="UPDATE `DEPTSCORE` SET `SCORE`=(SELECT SUM(`STUDENT`.`SCORE`) FROM `STUDENT` WHERE  `batch`='2') WHERE  `DEPT`='2'";
$queryc="UPDATE `DEPTSCORE` SET `SCORE`=(SELECT SUM(`STUDENT`.`SCORE`) FROM `STUDENT` WHERE  `batch`='3') WHERE  `DEPT`='3'";
$queryd="UPDATE `DEPTSCORE` SET `SCORE`=(SELECT SUM(`STUDENT`.`SCORE`) FROM `STUDENT` WHERE  `batch`='4') WHERE  `DEPT`='4'";
$querye="UPDATE `DEPTSCORE` SET `SCORE`=(SELECT SUM(`STUDENT`.`SCORE`) FROM `STUDENT` WHERE  `batch`='5') WHERE  `DEPT`='5'";

mysqli_query($cot,$querya);
mysqli_query($cot,$queryb);
mysqli_query($cot,$queryc);
mysqli_query($cot,$queryd);
mysqli_query($cot,$querye);


$query1="SELECT `SCORE`
FROM `DEPTSCORE`
WHERE `DEPT` = '1'";
$query2="SELECT `SCORE`
FROM `DEPTSCORE`
WHERE `DEPT` = '2'";
$query3="SELECT `SCORE`
FROM `DEPTSCORE`
WHERE `DEPT` = '3'";
$query4="SELECT `SCORE`
FROM `DEPTSCORE`
WHERE `DEPT` = '4'";
$query5="SELECT `SCORE`
FROM `DEPTSCORE`
WHERE `DEPT` = '5'";


$result1=mysqli_query($cot,$query1);
$result2=mysqli_query($cot,$query2);
$result3=mysqli_query($cot,$query3);
$result4=mysqli_query($cot,$query4);
$result5=mysqli_query($cot,$query5);


while($row=mysqli_fetch_array($result1))
{
 $scr1=$row['SCORE'];
}
while($row1=mysqli_fetch_array($result2))
{
 $scr2=$row1['SCORE'];
}
while($row2=mysqli_fetch_array($result3))
{
 $scr3=$row2['SCORE'];
}
while($row3=mysqli_fetch_array($result4))
{
 $scr4=$row3['SCORE'];
}
while($row4=mysqli_fetch_array($result5))
{
 $scr5=$row4['SCORE'];
}
?>

<html>
	 <head>
	<title>Amrita sports 2017 registration</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="js/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="js/bootstrap-theme.min.css">
  	<style>
  		h2	{
  			text-align: center;
  		}
  	</style>
     <!-- Custom styles -->
     <link rel="stylesheet" href="css/reg_form.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   <script src="js/reg_form.min.js"></script>

	<script type="text/javascript">
             function reload(){
              setInterval(function(){
              console.log("reload");
               window.location.href="result_tv.php";
           },9000);
          }
reload();
     </script>
  <script type='text/javascript' src='http://www.google.com/jsapi'></script>
	<style type="text/css">
body
{
font-family:Arial, Helvetica, sans-serif;
font-size:14px;
}
.comment_box
{
background-color:#D3E7F5; border-bottom:#ffffff solid 3px; padding-top:2px
}
a
	{
	text-decoration:none;
	color:#d02b55;
	}

</style>
  </head>
  <body style="background-color:#fff!important;">
  <div class="form_wrap" id="reg_form">
        <form class="form-horizontal" action = "after_reg.php" method = "post" name="form" onsubmit="return check_form();">
                <div class="row">
                <div class="container">
                <div class="col-md-10">
                    <div class="col-md-offset-1">
                    <h1 class="text-center" style="color:#C3092B ">Annual Athletic meet 2016-17 RESULTS </h1>
                    <h1><center>OVERALL CHAMPIONS FEMALE</center></h1>
                    			<table class="table table-striped table-bordered table-hover">
                     <tr>
                    	 <th> <center>NO : </center></th>
                    	 <th> <center>NAME</center></th>
                    	 <th><center>GENDER</center></th>
                     	 <th><center>CHEST</center></th>
                     	 <th> <center>BATCH</center></th>
                     	 <th><center>SCORE</center></th>

                    </tr>
                    		 	<?php
                    		 //	echo "hello";


                    	//$sql = "SELECT `name`,`gender`,`CHEST`,`batch`,`SCORE` FROM `STUDENT` WHERE `STUDENT`.`CHEST`>506 AND `STUDENT`.`CHEST`<599 OR `STUDENT`.`CHEST`>606 AND `STUDENT`.`CHEST`<699 OR `STUDENT`.`CHEST`>706 AND `STUDENT`.`CHEST`<799 ORDER BY `SCORE` DESC LIMIT 15 ";
                        $sqlfemale = "SELECT `name`,`gender`,`CHEST`,`batch`,`SCORE` FROM `STUDENT` WHERE SCORE = (SELECT MAX(SCORE) FROM STUDENT  WHERE gender='female') AND gender='female'";
                        $resultp = mysqli_query($cot, $sqlfemale);
                    //echo "hello";
                    		$sno = 1;
                    				if (mysqli_num_rows($resultp) > 0) {

                    					while($rowp = mysqli_fetch_assoc($resultp)) {
                    						if($rowp["batch"] == 1 )
                    						{
                    							$script="ME";
                    						}
                    						else if($rowp["batch"] == 2 )
                    						{
                    							$script="ECE";

                    						}
                    						else if($rowp["batch"] == 3 )
                    						{
                    							$script="EEE";
                    						}
                    						else if($rowp["batch"] == 4 )
                    						{
                    							$script="CSE";
                    						}
                    						else if($rowp["batch"] == 5 )
                    						{
                    							$script="CSA";
                    						}
                    				   	echo "<tr>";
                    				    	echo "<td><center>" . $sno++ . "</center></td>" ."<td><center>" . $rowp["name"] . "</center></td>" ."<td><center>" . $rowp["gender"] . "</center></td>" . "<td><center>". $rowp["CHEST"] . "</center></td>". "<td><center>". $script . "</center></td>". "<td><center>". $rowp["SCORE"] . "</center></td>" ;
                    				    	echo "</tr>";
                    				  //  echo "hello11";

                    				    }
                    				} else {
                    				    echo "0 results";
                    				}
                    			?>
                    			</table>

</body>
</html>
