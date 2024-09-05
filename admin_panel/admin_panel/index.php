<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
      <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Binary admin</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->

      <?php
      include_once('header.php');
      ?>

        <!-- /. NAV SIDE  -->

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Admin Dashboard</h2>
                        <h5>Welcome Admin , Love to see you back. </h5>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
             
              
                <!-- /. ROW  -->
      
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>admin_id</th>
                                                <th>admin_name</th>
                                                <th>admin_email</th>
                                                <th>admin_password</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Ravi</td>
                                                <td>ravi@gmail.com</td>
                                                <td>Ravi123</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Karan</td>
                                                <td>karan@gmail.com</td>
                                                <td>Karan123</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Ashish</td>
                                                <td>ashish@gmail.com</td>
                                                <td>Ashish123</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Ketan</td>
                                                <td>ketan@gmail.com</td>
                                                <td>Ketan123</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Harsha</td>
                                                <td>harsha@gmail.com</td>
                                                <td>Harsha123</td>
                                            </tr>
                                         

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                
                <!-- /. ROW  -->
            
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>