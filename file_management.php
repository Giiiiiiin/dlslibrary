﻿<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

 <!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>DLSL LMS | De La Salle Lipa Library Management System</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
     <!-- END HEAD -->
     <!-- BEGIN BODY -->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">


         <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.php" class="navbar-brand">
                    <img src="assets/img/dashlogo.png" width="200px" style="padding-bottom: 5px;" alt="" /></a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    <!-- MESSAGES SECTION -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-success">2</span>    <i class="icon-envelope-alt"></i>&nbsp; <i class="icon-chevron-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                       <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Today</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                        <br />
                                        <span class="label label-primary">Important</span> 

                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>Raphel Jonson</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                         <br />
                                        <span class="label label-success"> Moderate </span> 
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>Chi Ley Suk</strong>
                                        <span class="pull-right text-muted">
                                            <em>26 Jan 2014</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                         <br />
                                        <span class="label label-danger"> Low </span> 
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <!--END MESSAGES SECTION -->

                    <!--TASK SECTION -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-danger">5</span>   <i class="icon-tasks"></i>&nbsp; <i class="icon-chevron-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-tasks">
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> Profile </strong>
                                            <span class="pull-right text-muted">40% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> Pending Tasks </strong>
                                            <span class="pull-right text-muted">20% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> Work Completed </strong>
                                            <span class="pull-right text-muted">60% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> Summary </strong>
                                            <span class="pull-right text-muted">80% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Tasks</strong>
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <!--END TASK SECTION -->

                    <!--ALERTS SECTION -->
                    <li class="chat-panel dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-info">8</span>   <i class="icon-comments"></i>&nbsp; <i class="icon-chevron-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-alerts">

                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-comment" ></i> New Comment
                                    <span class="pull-right text-muted small"> 4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-twitter info"></i> 3 New Follower
                                    <span class="pull-right text-muted small"> 9 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-envelope"></i> Message Sent
                                    <span class="pull-right text-muted small" > 20 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-tasks"></i> New Task
                                    <span class="pull-right text-muted small"> 1 Hour ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-upload"></i> Server Rebooted
                                    <span class="pull-right text-muted small"> 2 Hour ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <!-- END ALERTS SECTION -->

                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> User Profile </a>
                            </li>
                            <li><a href="#"><i class="icon-gear"></i> Settings </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.php"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
       <div id="left">
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> Joe Romlin</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel">
                    <a href="index.php" >
                        <i class="icon-table"></i> Dashboard
	   
                       
                    </a>                   
                </li>

                <li><a href="login.php"><i class="icon-signin"></i> Login Page </a></li>

            </ul>

        </div>
        <!--END MENU SECTION -->


        <!--PAGE CONTENT -->
        <div id="content">
            <div class="inner" style="min-height:1200px;">
                <!-- Placeholder for dynamic content -->
                                <div class="inner">
                                    <div class="row">
                                        <div class="col-lg-12">
                    
                    
                                            <h2>DLSL LMS | De La Salle Lipa Library Management System </h2>
                    
                    
                    
                                        </div>
                                    </div>
                    
                                    <hr />
                    
                    
                                    <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4>All Library Transactions</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                        <thead>
                                                            <tr>
                                                                <th>Student no. #</th>
                                                                <th>Name</th>
                                                                <th>Books Borrowed</th>
                                                                <th>Date Borrowed</th>
                                                                <th>Date Returned</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>0000001</td>
                                                                <td>John Micheal C. Doe</td>
                                                                <td>The Perfect Son</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>2022321781</td>
                                                                <td>Yohann Nicholo C. Matibag</td>
                                                                <td>To Infinity and Beyond</td>
                                                                <td class="center">04/11/2024</td>
                                                                <td class="center"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
       <!--END PAGE CONTENT -->


    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
        <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
     <!-- END PAGE LEVEL SCRIPTS -->
</body>
     <!-- END BODY -->
</html>
