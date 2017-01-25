<!doctype html>

<head>
    <title>Amrita sports 2017 registration</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../js/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="../js/bootstrap-theme.min.css">

     <!-- Custom styles -->
     <link rel="stylesheet" href="../css/reg_form.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="../js/jquery-1.11.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
   <script src="../js/reg_form.min.js"></script>
   <script>
       function check_form(){
        var email = $("#email").val();
        var phone = $("#student_phone").val();

        var ck_phone = /^[0]?[789]\d{9}$/
        var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i

        if (!ck_phone.test(phone)){
          $("#student_phone").css("border","2px solid #6e1d2c");
            return false;
        }

        if (!ck_email.test(email)){
          $("#email").css("border","2px solid #6e1d2c");
            return false;
        }

        else{
         return true;
        }
       }
        </script>
</head>

<body>
    <div class="form_wrap" id="reg_form">
        <form  action = "../entry/marchpast.php" method = "post" name="form">
            <fieldset>
             <!--header section-->
               <div class="header" class="row">
                   <div class="col-md-12" id="head-content">
                        <a href=index.html><img src="../images/header.png"/></a>
                   </div>
               </div>
                <!-- Result Entry
                 -->
                 <div id="legend">
                <h3 class="text-center" class="subhead">Result Entry : MARCH PAST </h3>
                </div>

				<br><br><center><B>Position 1&nbsp;<input id="chest1" name="chest_no1" type="text" placeholder="enter chest number" required="">
				SCORE&nbsp;<input name="distance_no1" type="text" placeholder="enter SCORE " required=""><br>
				Position 2&nbsp;<input id="chest2" name="chest_no2" type="text" placeholder="enter chest number" required="">
				SCORE&nbsp;<input name="distance_no2" type="text" placeholder="enter SCORE" required=""><br>
				Position 3&nbsp;<input id="chest1" name="chest_no3" type="text" placeholder="enter chest number" required="">
				SCORE&nbsp;<input name="distance_no3" type="text" placeholder="enter SCORE " required=""><br>


				</center>


                <div class="col-md-offset-4">
                 <input type="submit" value = "Enter" class="btn btn-default btn-lg clear">
             </div>

                 <center>
				<br>
				CHEST NO : FOR DIFFERENT DEPT FOR MARCH PAST ARE:-
				<br>
				1 : ME
				<br>
				2 : ECE
				<br>
				3 : EEE
				<br>
				4 : CSE
				<br>
				5 : CSA
				<br>
                <br>
				SCORES AWARDED ARE AS FOLLOWS FOR 1ST,2ND,3RD POSITIONS RESPECTIVELY:-
				<br>
				1ST : 10 POINTS
				<br>
				2ND : 6 POINTS
				<br>
				3RD : 3 POINTS
				<br>

				</center>
                        </div>
                        </div>
                </div>

            </fieldset>
        </form>
    </div>
</body>
