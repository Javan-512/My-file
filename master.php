<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Online Report & Plan System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="asset/css/master.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/font-awesome/css/font-awesome.min.css">

  </head>
  <body>
    <div class="container">
      <div class="row" style="margin:10px 0;">
        <div class="col-md-4">
          <img src="asset/img/logo.png" style="width:25%; margin:0 auto;" alt="" class="img-responsive">
        </div>
        <div class="col-md-4">
          <center>
            <h3>جمهوری اسلامی افغانستان</h3>
            <h3>وزارت امور مهاجرین و عودت کنندگان</h3>
            <h3>معینیت پالیسی و تطبیق برنامه ها</h3>
            <h3>ریاست پالیسی و پلان</h3>
            <h3>سیستم گزارشدهی و پلانگذاری آنلاین</h3>
          </center>
        </div>
        <div class="col-md-4">
          <img src="asset/img/logo.png" style="width:25%; margin:0 auto;" alt="" class="img-responsive">
        </div>
      </div>
      <!-- MORR -->
      <div class="row">
        <nav class="navbar navbar-default">
         <div class="container-fluid">
           <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="home.php">ORPS System</a>
           </div>
           <div class="collapse navbar-collapse" id="myNavbar">
             <ul class="nav navbar-nav">
               <li class="<?php if(isset($home)){echo "active";} ?>"><a href="home.php">Home</a></li>
               <li class="<?php if(isset($report)){echo "active";} ?>"><a href="report.php">Daily Report</a></li>
               <li class="<?php if(isset($contact)){echo "active";} ?>"><a href="contact.php">Contact Us</a></li>
             </ul>
             <ul class="nav navbar-nav navbar-right">
               <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="fa fa-user"></span> Login</a></li>
             </ul>
           </div>
         </div>
        </nav>
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" style="margin-top:25%; width:80%;">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <img src="asset/img/logo.png" style="width:25%; margin:0 auto;" alt="" class="img-responsive">
              </div>
              <div class="modal-body" style="width:100%; padding:10px 10%;">
                <form role="form" action="asset/controller/login.php" method="POST">
                   <div class="form-group">
                     <input type="email" class="form-control" name="username" id="email" placeholder="Username" required>
                   </div>
                   <div class="form-group">
                     <input type="password" class="form-control" name="password" id="pwd" placeholder="Password" required>
                   </div>
                   <div class="checkbox">
                     <label><input type="checkbox" > Remember me</label>
                   </div>
                   <button type="submit" name="submit" class="btn btn-info btn-block">Submit</button>
                 </form>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- navbar -->
      <div class="row" style="margin-top:-17px;">
        <?php if(isset($home)){
          echo $home;
        }elseif (isset($report)) {
          echo $report;
        }elseif (isset($contact)) {
          echo $contact;
        }elseif (isset($mmore)) {
          echo $mmore;
        }
        else{
          echo "--";
        } ?>
      </div>
      <footer>
        <a href="#" style="float:right; text-decoration:none; margin-top:20px;" ><span style="color:#b1acac;">Designed By:</span>Ezatullah Rezayee</a>
      </footer>
    </div>
    <script type="text/javascript" src="asset/js/jquery.min.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
  </body>
</html>
