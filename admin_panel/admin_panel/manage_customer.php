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
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
       
                 
         
     
<?php
  include_once('header.php');
  ?>
       
                <!-- /. ROW  -->
                <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Customer</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Shop
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>customer_id</th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>password</th>
                                            <th>contact_number</th>
                                            <th>status</th>
                                            <th>city_id</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Ravi</td>
                                            <td>rkmali@gmail.com</td>
                                            <td>Ravi123</td>
                                            <td>0123789456</td>
                                            <td>Active</td>
                                            <td>1</td>
											<td>
												<a href="#" class="btn btn-primary">Edit</a>
												<a href="#" class="btn btn-danger">Delete</a>
												<a href="#" class="btn btn-info">Status</a>
											</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Karan</td>
                                            <td>karan@gmail.com</td>
                                            <td>Karan123</td>
                                            <td>0123789456</td>
                                            <td>Active</td>
                                            <td>2</td>
											<td>
												<a href="#" class="btn btn-primary">Edit</a>
												<a href="#" class="btn btn-danger">Delete</a>
												<a href="#" class="btn btn-info">Status</a>
											</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Ashish</td>
                                            <td>ashish@gmail.com</td>
                                            <td>Ashish123</td>
                                            <td>0123789456</td>
                                            <td>Active</td>
                                            <td>3</td>
											<td>
												<a href="#" class="btn btn-primary">Edit</a>
												<a href="#" class="btn btn-danger">Delete</a>
												<a href="#" class="btn btn-info">Status</a>
											</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Ketan</td>
                                            <td>ketan@gmail.com</td>
                                            <td>Ketan123</td>
                                            <td>0123789456</td>
                                            <td>Active</td>
                                            <td>3</td>
											<td>
												<a href="#" class="btn btn-primary">Edit</a>
												<a href="#" class="btn btn-danger">Delete</a>
												<a href="#" class="btn btn-info">Status</a>
											</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Harsha</td>
                                            <td>harsha@gmail.com</td>
                                            <td>Harsha123</td>
                                            <td>0123789456</td>
                                            <td>Active</td>
                                            <td>3</td>
											<td>
												<a href="#" class="btn btn-primary">Edit</a>
												<a href="#" class="btn btn-danger">Delete</a>
												<a href="#" class="btn btn-info">Status</a>
											</td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
              
            </div>
                <!-- /. ROW  -->
           
 

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
 
</body>
</html>
