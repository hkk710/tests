<?phpsession_start();if($_SESSION["adminlogged"]!=true){  header("Location:./index.html");}?>
<!doctype html>

<head>
    <title>Amrita sports 2015 registration</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../js/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="../js/bootstrap-theme.min.css">

     <!-- Custom styles -->
     <link rel="stylesheet" href="../css/reg_form.min.css">
      <link rel="stylesheet" href="../css/main.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="../js/jquery-1.11.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
   <script src="../js/reg_form.min.js"></script>
  <style>
  #admin_links{
  margin: 0 auto;
}

#admin_links a{
margin-bottom:10px;
}

#clear{
 margin:300px;
}
</style>
</head>
<body>
    <div class="form_wrap" id="reg_form">
			<div class="navbar-collapse collapse">
          <a class="pull-left" href="../admin/unset.php">   LOG OUT</a> </div>
        <form class="form-horizontal" action = "add.php" method = "post" name="form" onsubmit="return check_form();">
            <fieldset>
             <!--header section-->
               <div class="header" class="row">
                   <div class="col-md-12" id="head-content">
                       <img src="../images/header.png"/>
                   </div>
               </div>
                <!-- Registration form
                 -->
                 <div id="legend">
                <h3 class="text-center" class="subhead">Welcome</h3><br><br>
               <div id="admin_links" class="container">
                   <div class="row">
               <!--   <div class="col-md-12  col-md-6 col-md-offset-4">
             <a href="../deA.php" class="btn btn-primary btn-lg col-md-6">Delete Student Registration</a>
         </div>
          <div class="col-md-12  col-md-6 col-md-offset-4">
             <a href="../deAC.php" class="btn btn-primary btn-lg col-md-6">Delete Cricket Team</a>
         </div>
         !-->
         <div class="col-md-6 col-md-offset-2">
             <a href="100_m.html" class="btn btn-primary btn-lg col-md-6">100 M Male</a>             <a href="100_f.html" class="btn btn-primary btn-lg col-md-6">100 M Female</a>              <a href="200_m.html" class="btn btn-primary btn-lg col-md-6">200 M Male</a>               <a href="100_f.html" class="btn btn-primary btn-lg col-md-6">100 M Female</a>                <a href="200_m.html" class="btn btn-primary btn-lg col-md-6">200 M Male</a>                <a href="200_f.html" class="btn btn-primary btn-lg col-md-6">200 M Female</a>                <a href="400_m.html" class="btn btn-primary btn-lg col-md-6">400 M Male</a>                <a href="400_f.html" class="btn btn-primary btn-lg col-md-6">400 M Female</a>                <a href="800_m.html" class="btn btn-primary btn-lg col-md-6">800 M Male</a>                <a href="800_f.html" class="btn btn-primary btn-lg col-md-6">800 M Female</a>               <a href="1500_m.html" class="btn btn-primary btn-lg col-md-6">1500 M Male</a>               <a href="1500_f.html" class="btn btn-primary btn-lg col-md-6">1500 M Female</a>               <a href="5000_m.html" class="btn btn-primary btn-lg col-md-6">5000 M Male</a>              <a href="10000_m.html" class="btn btn-primary btn-lg col-md-6">10000 M Male </a>              <a href="discuss_m.html" class="btn btn-primary btn-lg col-md-6">Discuss Throw Male</a>              <a href="discuss_f.html" class="btn btn-primary btn-lg col-md-6">Discuss Throw Female</a>              <a href="shotput_f.html" class="btn btn-primary btn-lg col-md-6">SHOT PUT FEMALE</a>              <a href="shotput_m.html" class="btn btn-primary btn-lg col-md-6">SHOT PUT MALE</a>             <a href="triplejump_m.html" class="btn btn-primary btn-lg col-md-6">TRIPLE JUMP MALE</a>             <a href="triplejump_f.html" class="btn btn-primary btn-lg col-md-6">TRIPLE JUMP Female</a>             <a href="longjump_f.html" class="btn btn-primary btn-lg col-md-6">LONG JUMP FEMALE</a>             <a href="longjump_m.html" class="btn btn-primary btn-lg col-md-6">LONG JUMP MALE</a>             <a href="highjump_m.html" class="btn btn-primary btn-lg col-md-6">HIGH JUMP MALE</a>             <a href="javalin_m.html" class="btn btn-primary btn-lg col-md-6">JAVELIN THROW MALE</a>            <a href="javalin_f.html" class="btn btn-primary btn-lg col-md-6">JAVELIN THROW FEMALE</a>            <a href="hammer_m.html" class="btn btn-primary btn-lg col-md-6">HAMMER THROW MALE</a>            <a href="hammer_f.html" class="btn btn-primary btn-lg col-md-6">HAMMER THROW FEMALE</a>             <a href="hurdles100_m.html" class="btn btn-primary btn-lg col-md-6">110 M hurdles MALE</a>            <a href="hurdles400_m.html" class="btn btn-primary btn-lg col-md-6">400 M Hurdles Male</a>            <a href="relay100male.html" class="btn btn-primary btn-lg col-md-6"> 100 * 4 RELAY MALE </a>            <a href="relay100female.html" class="btn btn-primary btn-lg col-md-6"> 100 * 4 RELAY FEMALE </a>            <a href="relay400male.html" class="btn btn-primary btn-lg col-md-6"> 400 * 4 RELAY MALE </a>            <a href="relaymedleyfemale.html" class="btn btn-primary btn-lg col-md-6"> MEDLEY RELAY FEMALE </a>            <a href="marchpast.php" class="btn btn-primary btn-lg col-md-6"> MARCHPAST </a>            <a href="heats100m.php" class="btn btn-primary btn-lg col-md-6"> 100 M MALE HEATS </a>            <a href="heats100f.php" class="btn btn-primary btn-lg col-md-6"> 100 M FEMALE HEATS </a>            <a href="heats200m.php" class="btn btn-primary btn-lg col-md-6"> 200 M MALE HEATS </a>            <a href="heats200f.php" class="btn btn-primary btn-lg col-md-6"> 200 M FEMALE HEATS </a>            <a href="extra.html" class="btn btn-primary btn-lg col-md-6"> EXTRAS</a>
         </div>
         </div>
            </div>
  <div  id="clear">

</div>
                </div>

    </div>
<!-- /container -->
                        </div>
                        </div>
                </div>

            </fieldset>
        </form>
    </div>
</body>