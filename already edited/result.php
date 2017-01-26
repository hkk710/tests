<?php

$cot=mysqli_connect("localhost","root","","athletics");

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
               window.location.href="result_m.php";
              },10000);
          }
//reload();
     </script>


  <script type='text/javascript' src='http://www.google.com/jsapi'></script>

	<script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1', {'packages':['piechart', 'imagepiechart', 'barchart','imageBarChart','linechart']});

      // Set a callback to run when the API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
		  var value1= <?php
                    $total = 0;
                    //MARCHPAST
                    $query = "SELECT SCORE FROM MARCH WHERE DEPT=1";
					$res = mysqli_query($cot, $query);
					while($row = mysqli_fetch_assoc($res)) {
						$mscore1 = $row['SCORE'];
					}
					if(isset($mscore1))
					$total += $scr1+$mscore1;
					else {
					$total += $scr1;
					}

                    //RELAY100M
                    $query = "SELECT SCORE FROM RESULT_RELAY100M WHERE DEPT=1";
					$res = mysqli_query($cot, $query);
					while($row = mysqli_fetch_assoc($res)) {
						$m100score1 = $row['SCORE'];
					}
					if(isset($m100score1))
					$total += $m100score1;

                    //RELAY100F
                    $query = "SELECT SCORE FROM RESULT_RELAY100F WHERE DEPT=1";
					$res = mysqli_query($cot, $query);
					while($row = mysqli_fetch_assoc($res)) {
						$f100score1 = $row['SCORE'];
					}
					if(isset($f100score1))
					$total += $f100score1;

                    //RELAY400M
                    $query = "SELECT SCORE FROM RESULT_RELAY400M WHERE DEPT=1";
					$res = mysqli_query($cot, $query);
					while($row = mysqli_fetch_assoc($res)) {
						$m400score1 = $row['SCORE'];
					}
					if(isset($m400score1))
					$total += $m400score1;

                    //MEDLEYF
                    $query = "SELECT SCORE FROM RESULT_MEDLEY_F WHERE DEPT=1";
					$res = mysqli_query($cot, $query);
					while($row = mysqli_fetch_assoc($res)) {
						$med1 = $row['SCORE'];
					}
					if(isset($med1))
					$total += $med1;

                    echo $total;
					?>;
	 var value2= <?php
     $total = 0;
     //MARCHPAST
     $query = "SELECT SCORE FROM MARCH WHERE DEPT=2";
     $res = mysqli_query($cot, $query);
     while($row = mysqli_fetch_assoc($res)) {
         $mscore2 = $row['SCORE'];
     }
     if(isset($mscore2))
     $total += $scr2+$mscore2;
     else {
     $total += $scr2;
     }

     //RELAY100M
     $query = "SELECT SCORE FROM RESULT_RELAY100M WHERE DEPT=2";
     $res = mysqli_query($cot, $query);
     while($row = mysqli_fetch_assoc($res)) {
         $m100score2 = $row['SCORE'];
     }
     if(isset($m100score2))
     $total += $m100score2;

     //RELAY100F
     $query = "SELECT SCORE FROM RESULT_RELAY100F WHERE DEPT=2";
     $res = mysqli_query($cot, $query);
     while($row = mysqli_fetch_assoc($res)) {
         $f100score2 = $row['SCORE'];
     }
     if(isset($f100score2))
     $total += $f100score2;

     //RELAY400M
     $query = "SELECT SCORE FROM RESULT_RELAY400M WHERE DEPT=2";
     $res = mysqli_query($cot, $query);
     while($row = mysqli_fetch_assoc($res)) {
         $m400score2 = $row['SCORE'];
     }
     if(isset($m400score2))
     $total += $m400score2;

     //MEDLEYF
     $query = "SELECT SCORE FROM RESULT_MEDLEY_F WHERE DEPT=2";
     $res = mysqli_query($cot, $query);
     while($row = mysqli_fetch_assoc($res)) {
         $med2 = $row['SCORE'];
     }
     if(isset($med2))
     $total += $med2;

     echo $total;
		?>;
		var value3= <?php

        $total = 0;
        //MARCHPAST
        $query = "SELECT SCORE FROM MARCH WHERE DEPT=3";
        $res = mysqli_query($cot, $query);
        while($row = mysqli_fetch_assoc($res)) {
            $mscore3 = $row['SCORE'];
        }
        if(isset($mscore3))
        $total += $scr3+$mscore3;
        else {
        $total += $scr3;
        }

        //RELAY100M
        $query = "SELECT SCORE FROM RESULT_RELAY100M WHERE DEPT=3";
        $res = mysqli_query($cot, $query);
        while($row = mysqli_fetch_assoc($res)) {
            $m100score3 = $row['SCORE'];
        }
        if(isset($m100score3))
        $total += $m100score3;

        //RELAY100F
        $query = "SELECT SCORE FROM RESULT_RELAY100F WHERE DEPT=3";
        $res = mysqli_query($cot, $query);
        while($row = mysqli_fetch_assoc($res)) {
            $f100score3 = $row['SCORE'];
        }
        if(isset($f100score3))
        $total += $f100score3;

        //RELAY400M
        $query = "SELECT SCORE FROM RESULT_RELAY400M WHERE DEPT=3";
        $res = mysqli_query($cot, $query);
        while($row = mysqli_fetch_assoc($res)) {
            $m400score3 = $row['SCORE'];
        }
        if(isset($m400score3))
        $total += $m400score3;

        //MEDLEYF
        $query = "SELECT SCORE FROM RESULT_MEDLEY_F WHERE DEPT=3";
        $res = mysqli_query($cot, $query);
        while($row = mysqli_fetch_assoc($res)) {
            $med3 = $row['SCORE'];
        }
        if(isset($med3))
        $total += $med3;

        echo $total;
		?>;
		var value4= <?php

        $total = 0;
        //MARCHPAST
        $query = "SELECT SCORE FROM MARCH WHERE DEPT=4";
        $res = mysqli_query($cot, $query);
        while($row = mysqli_fetch_assoc($res)) {
            $mscore4 = $row['SCORE'];
        }
        if(isset($mscore4))
        $total += $scr4+$mscore4;
        else {
        $total += $scr4;
        }

        //RELAY100M
        $query = "SELECT SCORE FROM RESULT_RELAY100M WHERE DEPT=4";
        $res = mysqli_query($cot, $query);
        while($row = mysqli_fetch_assoc($res)) {
            $m100score4 = $row['SCORE'];
        }
        if(isset($m100score4))
        $total += $m100score4;

        //RELAY100F
        $query = "SELECT SCORE FROM RESULT_RELAY100F WHERE DEPT=4";
        $res = mysqli_query($cot, $query);
        while($row = mysqli_fetch_assoc($res)) {
            $f100score4 = $row['SCORE'];
        }
        if(isset($f100score4))
        $total += $f100score4;

        //RELAY400M
        $query = "SELECT SCORE FROM RESULT_RELAY400M WHERE DEPT=4";
        $res = mysqli_query($cot, $query);
        while($row = mysqli_fetch_assoc($res)) {
            $m400score4 = $row['SCORE'];
        }
        if(isset($m400score4))
        $total += $m400score4;

        //MEDLEYF
        $query = "SELECT SCORE FROM RESULT_MEDLEY_F WHERE DEPT=4";
        $res = mysqli_query($cot, $query);
        while($row = mysqli_fetch_assoc($res)) {
            $med4 = $row['SCORE'];
        }
        if(isset($med4))
        $total += $med4;

        echo $total;
		?>;
		var value5= <?php

        $total = 0;
        //MARCHPAST
        $query = "SELECT SCORE FROM MARCH WHERE DEPT=5";
        $res = mysqli_query($cot, $query);
        while($row = mysqli_fetch_assoc($res)) {
            $mscore5 = $row['SCORE'];
        }
        if(isset($mscore5))
        $total += $scr5+$mscore5;
        else {
        $total += $scr5;
        }

        //RELAY100M
        $query = "SELECT SCORE FROM RESULT_RELAY100M WHERE DEPT=5";
        $res = mysqli_query($cot, $query);
        while($row = mysqli_fetch_assoc($res)) {
            $m100score5 = $row['SCORE'];
        }
        if(isset($m100score5))
        $total += $m100score5;

        //RELAY100F
        $query = "SELECT SCORE FROM RESULT_RELAY100F WHERE DEPT=5";
        $res = mysqli_query($cot, $query);
        while($row = mysqli_fetch_assoc($res)) {
            $f100score5 = $row['SCORE'];
        }
        if(isset($f100score5))
        $total += $f100score5;

        //RELAY400M
        $query = "SELECT SCORE FROM RESULT_RELAY400M WHERE DEPT=5";
        $res = mysqli_query($cot, $query);
        while($row = mysqli_fetch_assoc($res)) {
            $m400score5 = $row['SCORE'];
        }
        if(isset($m400score5))
        $total += $m400score5;

        //MEDLEYF
        $query = "SELECT SCORE FROM RESULT_MEDLEY_F WHERE DEPT=5";
        $res = mysqli_query($cot, $query);
        while($row = mysqli_fetch_assoc($res)) {
            $med5 = $row['SCORE'];
        }
        if(isset($med5))
        $total += $med5;

        echo $total;
		?>;


        var data = new google.visualization.DataTable();
        data.addColumn('string', 'list');
        data.addColumn('number', 'Department Score');
        data.addRows(5);
        data.setValue(0, 0, 'Mech');
        data.setValue(0, 1, value1);
        data.setValue(1, 0, 'ECE');
        data.setValue(1, 1, value2);
        data.setValue(2, 0, 'EEE');
        data.setValue(2, 1, value3);
		data.setValue(3, 0, 'CSE');
        data.setValue(3, 1, value4);
		data.setValue(4, 0, 'CSA');
        data.setValue(4, 1, value5);

     //   var chart = new google.visualization.ImagePieChart(document.getElementById('9lessonschart'));
     //   chart.draw(data, {width: 400, height: 240, is3D: true, title: '9lessons Tutorials 3D Chart'});

		var chart = new google.visualization.PieChart(document.getElementById('2'));
        chart.draw(data, {width: 400, height: 240, is3D: true, title: 'DEPARTMENT VICE PIE CHART'});

		var chart = new google.visualization.BarChart(document.getElementById('3'));
        chart.draw(data, {width: 400, height: 240, is3D: true, title: 'DEPARTMENT VICE BAR CHART'});

	//	var chart = new google.visualization.ImageBarChart(document.getElementById('4'));
    //    chart.draw(data, {width: 400, height: 240, min: 0});

	//	var chart = new google.visualization.LineChart(document.getElementById('5'));
    //    chart.draw(data, {width: 400, height: 240, legend: 'bottom', title: 'Tutorials'});
      }

    </script>
	<style type="text/css">

body
{
font-family:Arial, Helvetica, sans-serif;
font-size:14px;
}
.comment_box
{
background-color:#D3E7F5; border-bottom:#ffffff solid 1px; padding-top:3px
}
a
	{
	text-decoration:none;
	color:#d02b55;
	}

</style>
  </head>

  <body>
  <div class="form_wrap" id="reg_form">
        <form class="form-horizontal" action = "after_reg.php" method = "post" name="form" onsubmit="return check_form();">
            <fieldset>
             <!--header section-->
               <div class="header" class="row">
                   <div class="col-md-12" id="head-content">
                       <a href=index.html><img src="images/header.png"/></a>
                   </div>
               </div>
                <!-- Registration form
                 -->
                 <h2 class="text-center">

                 </h2>
                <div class="row">

                <div class="container">
                <div class="col-md-10">
					<h1 class="text-center">Annual Athletic meet 2016-17 RESULTS </h1>
				<!--	<br><br><br><marquee><h3 class="text-center"><?php echo $scr5 ?></h3></marquee> -->

						<h2>  OVERALL DEPARTMENT SCORE
</h2>
   <div style="width:800px; margin:0 auto;"><center>

	<div id='2' style="float:left"></div>

	<div id='9lessonschart' style="float:left"></div>

	<div id='3' style="float:left"></div>

	<div id='4' style="float:left"></div>

	<div id='5' style="float:left"></div>

	</center>
	</div>


			<table class="table table-striped table-bordered table-hover">
 <tr>
	 <th> <center>DEPARTMENT</center></th>
 	 <th><center>POINTS</center></th>

</tr>
		 	<?php
		 //	echo "hello";


	$sql = "SELECT * FROM `DEPTSCORE` ORDER BY `SCORE` desc ";

$resultp = mysqli_query($cot, $sql);
//echo "hello";
		//$sno = 1;
				if (mysqli_num_rows($resultp) > 0) {

					while($rowp = mysqli_fetch_assoc($resultp)) {
						if($rowp["DEPT"] == 1 )
						{
							$script="ME";
							if(isset($mscore1))
					 	   		$m = $mscore1;
					 	   	else {
					 	   		$m = 0;
					 	   	}
                            if(isset($m100score1))
                                $m += $m100score1;
                            if(isset($f100score1))
                                $m += $f100score1;
                            if(isset($m400score1))
                                $m += $m400score1;
                            if(isset($med1))
                                $m += $med1;
						}
						else if($rowp["DEPT"] == 2 )
						{
							$script="ECE";
							if(isset($mscore2))
					 	   		$m = $mscore2;
					 	   	else {
					 	   		$m = 0;
					 	   	}
                            if(isset($m100score2))
                                $m += $m100score2;
                            if(isset($f100score2))
                                $m += $f100score2;
                            if(isset($m400score2))
                                $m += $m400score2;
                            if(isset($med2))
                                $m += $med2;
						}
						else if($rowp["DEPT"] == 3 )
						{
							$script="EEE";
							if(isset($mscore3))
					 	   		$m = $mscore3;
					 	   	else {
					 	   		$m = 0;
					 	   	}
                            if(isset($m100score3))
                                $m += $m100score3;
                            if(isset($f100score3))
                                $m += $f100score3;
                            if(isset($m400score3))
                                $m += $m400score3;
                            if(isset($med3))
                                $m += $med3;
						}
						else if($rowp["DEPT"] == 4 )
						{
							if(isset($mscore4))
					 	   		$m = $mscore4;
					 	   	else {
					 	   		$m = 0;
					 	   	}
							$script="CSE";
                            if(isset($m100score4))
                                $m += $m100score4;
                            if(isset($f100score4))
                                $m += $f100score4;
                            if(isset($m400score4))
                                $m += $m400score4;
                            if(isset($med4))
                                $m += $med4;
						}
						else if($rowp["DEPT"] == 5 )
						{
							$script="CSA";
							if(isset($mscore5))
					 	   		$m = $mscore5;
					 	   	else {
					 	   		$m = 0;
					 	   	}
                            if(isset($m100score5))
                                $m += $m100score5;
                            if(isset($f100score5))
                                $m += $f100score5;
                            if(isset($m400score5))
                                $m += $m400score5;
                            if(isset($med5))
                                $m += $med5;
						}
						$tot = $rowp["SCORE"]+$m;
				   	echo "<tr>";
				    	echo "<td><center>" . $script . "</center></td>" . "<td><center>".$tot. "</center></td>" ;
				    	echo "</tr>";
				  //  echo "hello11";

				    }
				} else {
		//		    echo "0 results";
				}
			?>
			</table>

				<br><br>
<h1><center>OVERALL CHAMPIONS MALE</center></h1>
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
$sqlmale = "SELECT `name`,`gender`,`CHEST`,`batch`,`SCORE` FROM `STUDENT` WHERE SCORE = (SELECT MAX(SCORE) FROM STUDENT WHERE gender='male') AND gender='male'";
$resultp = mysqli_query($cot, $sqlmale);
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
					//		    echo "0 results";
							}
						?>
						</table>


	</div>


                </div>
            </div>
                        </div>
                </div>

            </fieldset>
        </form>
    </div>
</body>

</html>
