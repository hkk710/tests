<!doctype html>

<head>
    <title>Amrita sports 2015 registration</title>
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
        <form  action = "../entry/heat100m.php" method = "post" name="form">
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
                <h3 class="text-center" class="subhead">Result Entry : 100m MALE HEATS </h3>
                </div>

				<br><br><center><B>Position 1&nbsp;<input id="chest1" name="chest_no1" type="text" placeholder="enter chest number" required="">
				Time&nbsp;<input name="time_no1" type="text" placeholder="enter time " required=""><br>
				Position 2&nbsp;<input id="chest2" name="chest_no2" type="text" placeholder="enter chest number" required="">
				Time&nbsp;<input name="time_no2" type="text" placeholder="enter time" required=""><br>
				Position 3&nbsp;<input id="chest1" name="chest_no3" type="text" placeholder="enter chest number" required="">
				Time&nbsp;<input name="time_no3" type="text" placeholder="enter time " required=""><br>



				
				</center>

				
                
                                                           <input type="submit" value = "Enter" class="pull-right btn btn-default clear">
                        </div>
                        </div>
                </div>
                
            </fieldset>
        </form>
    </div>
</body>
