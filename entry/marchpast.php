<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "athletics";
$score=0;
	// Create connection
	//$conn = mysqli_connect($servername, $username, $password, $dbname);
	$conn = mysqli_connect($servername, $username, $password, $dbname);




	$chest1 = $_POST["chest_no1"];
	$chest2 = $_POST["chest_no2"];
	$chest3 = $_POST["chest_no3"];

	$dist1 = $_POST["distance_no1"];
	$dist2 = $_POST["distance_no2"];
	$dist3 = $_POST["distance_no3"];

/*
	$insert1_query = "INSERT INTO `athletics`.`result_discuss_f`(`chest`, `score`) VALUES ('$chest1','$dist1')";
	$insert2_query = "INSERT INTO `athletics`.`result_discuss_f`(`chest`, `score`) VALUES ('$chest2','$dist2')";
	$insert3_query = "INSERT INTO `athletics`.`result_discuss_f`(`chest`, `score`) VALUES ('$chest3','$dist3')";
	$insert4_query = "INSERT INTO `athletics`.`result_discuss_f`(`chest`, `score`) VALUES ('$chest4','$dist4')";
	$insert5_query = "INSERT INTO `athletics`.`result_discuss_f`(`chest`, `score`) VALUES ('$chest5','$dist5')";

	$insert1 = mysqli_query($conn, $insert1_query);
	$insert2 = mysqli_query($conn, $insert2_query);
	$insert3 = mysqli_query($conn, $insert3_query);
	$insert4 = mysqli_query($conn, $insert4_query);
	$insert5 = mysqli_query($conn, $insert5_query);

	$score1 = "SELECT `SCORE` FROM `athletics`.`STUDENT` WHERE `CHEST` = '$chest1'";
	$result1 = mysqli_query($conn, $score1);
	while($row = mysqli_fetch_assoc($result1))
	{

		$score1 = $row["SCORE"];
		$score1 = $score1+10;
	}
	$score2 = "SELECT `SCORE` FROM `athletics`.`STUDENT` WHERE `CHEST` = '$chest2'";
	$result2 = mysqli_query($conn, $score2);
	while($row = mysqli_fetch_assoc($result2))
	{

		$score2 = $row["SCORE"];
		$score2 = $score2+5;
	}
	$score3 = "SELECT `SCORE` FROM `athletics`.`STUDENT` WHERE `CHEST` = '$chest3'";
	$result3 = mysqli_query($conn, $score3);
	while($row = mysqli_fetch_assoc($result3))
	{

		$score3 = $row["SCORE"];
		$score3 = $score3+3;
	}
	$score4 = "SELECT `SCORE` FROM `athletics`.`STUDENT` WHERE `CHEST` = '$chest4'";
	$result4 = mysqli_query($conn, $score4);
	while($row = mysqli_fetch_assoc($result4))
	{

		$score4 = $row["SCORE"];
		$score4 = $score4+2;
	}
	$score5 = "SELECT `SCORE` FROM `athletics`.`STUDENT` WHERE `CHEST` = '$chest5'";
	$result5 = mysqli_query($conn, $score5);
	while($row = mysqli_fetch_assoc($result5))
	{

		$score5 = $row["SCORE"];
		$score5 = $score5+1;
	}
*/
/*	$update1_query = "UPDATE `athletics`.`STUDENT` SET `SCORE` = '$dist1' WHERE `CHEST` = '$chest1'";
	$qry=mysqli_query($conn, $update1_query);
$update2_query = "UPDATE `athletics`.`STUDENT` SET `SCORE` = '$dist2' WHERE `CHEST` = '$chest2'";
	$qry=mysqli_query($conn, $update2_query);
$update3_query = "UPDATE `athletics`.`STUDENT` SET `SCORE` = '$dist3' WHERE `CHEST` = '$chest3'";
	$qry=mysqli_query($conn, $update3_query);
*/
$query = "INSERT INTO MARCH(DEPT,SCORE) VALUES($chest1,$dist1),($chest2,$dist2),($chest3,$dist3)";
//$query = "INSERT INTO MARCH(DEPT,SCORE) VALUES($chest1),($chest2),($chest3)";
$result1 = mysqli_query($conn, $query);

/*$update1_query = "UPDATE `athletics`.`DEPTSCORE` SET `SCORE` = $score1 WHERE `DEPT` = '$chest1'";
$qry=mysqli_query($conn, $update1_query);
$update2_query = "UPDATE `athletics`.`DEPTSCORE` SET `SCORE` = $score2 WHERE `DEPT` = '$chest2'";
$qry=mysqli_query($conn, $update2_query);
$update3_query = "UPDATE `athletics`.`DEPTSCORE` SET `SCORE` = $score3 WHERE `DEPT` = '$chest3'";
$qry=mysqli_query($conn, $update3_query);
*/
mysqli_error($conn);
	mysqli_close($conn);
	header("Location:../RESULTS/");
?>
