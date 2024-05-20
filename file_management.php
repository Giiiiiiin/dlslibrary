<!DOCTYPE html>
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

<?php
require("include/conn.php");
?>

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
                                                <h4 id="librarian">Master Table (Librarian)</h4>
                                            </div>
                        
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover" id="dataTables-master">
                                                        <thead>
                                                            <tr>
                                                                <th>Borrower Index</th>
                                                                <th><a href="#listBooks">Book Number</th>
                                                                <th><a href="#student">Student Number</th>
                                                                <th><a href="#retri">Retrieval Status</th>
                                                                <td colspan="2" align=center>
                                                                    <button type="button" onClick="window.location.href='master_insert.php'">Insert</button>
                                                                </td>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
    
                                                        <?php
                                                        $sql = "SELECT * FROM tbllibrarian order by fldborrower_index ";
                                                        $result = $conn->query($sql);
                                                        if($result->num_rows > 0) 
                                                        {
                                                        while($row = $result->fetch_assoc())
                                                        {
                
                                                        $vborrower=$row['fldborrower_index'];			
                                                        $vbooknum=$row['fldbooknum'];	
                                                        $vstudnum=$row['fldstudnum'];
                                                        $vretri=$row['fldretri'];
                                                        ?>

                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    <?php
                                                                    echo $vborrower;
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    echo $row['fldbooknum'];
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    echo $row['fldstudnum'];
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    echo $row['fldretri'];
                                                                    ?>
                                                                </td>
                                                                <td colspan="2" align=center>
                                                                    <button type="button" onClick="window.location.href='master_delete.php?vid=<?php echo $vborrower; ?>'">Delete</button>
                                                                </td>
                                                            </tr>
                                                            
                                                        <?php
                                                        }  
                                                        }   
                                                        ?>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 id="listBooks">List of Books</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover" id="dataTables-books">
                                                        <thead>
                                                            <tr>
                                                                <th>Book Number</th>
                                                                <th>Title</th>
                                                                <th><a href="#listAuthors">Author Index</th>
                                                                <th><a href="#listAvail">Availability Record</th>
                                                                <td colspan="2" align=center>
                                                                    <button type="button" onClick="window.location.href='book_insert.php'">Insert</button>
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        <?php
                                                        $sql = "SELECT * FROM tblbooklist order by fldbooknum";
                                                        $result = $conn->query($sql);
                                                        if($result->num_rows > 0) 
                                                        {
                                                        while($row = $result->fetch_assoc())
                                                        {
                
                                                        $vindex2=$row['fldbooknum'];			
                                                        $vrow21=$row['fldtitle'];	
                                                        $vrow22=$row['fldauthor_index'];
                                                        $vrow23=$row['fldavail_record'];
                                                        ?>

                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    <?php
                                                                    echo $vindex2;
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    echo $row['fldtitle'];
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    echo $row['fldauthor_index'];
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    echo $row['fldavail_record'];
                                                                    ?>
                                                                </td>
                                                                <!-- onClick needs specific webpages (WIP) -->
                                                                <td>
                                                                    <button type="button" onClick="window.location.href='book_update.php?vid=<?php echo $vindex2; ?>'">Edit</button>
                                                                </td>
                                                                <td>
                                                                   <button type="button" onClick="window.location.href='book_delete.php?vid=<?php echo $vindex2; ?>'">Delete</button>
                                                                </td>
                                                                 <!-- onClick needs specific webpages (WIP) -->
                                                            </tr>
                                                            
                                                        <?php
                                                        }  
                                                        }   
                                                        ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 id="listAuthors">List of Authors</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover" id="dataTables-authors">
                                                        <thead>
                                                            <tr>
                                                                <th>Author Index</th>
                                                                <th><a href="#listBooks">Book Number</th>
                                                                <th>Author</th>
                                                                <td colspan="2" align=center>
                                                                    <button type="button" onClick="window.location.href='author_insert.php'">Insert</button>
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        <?php
                                                        $sql = "SELECT * FROM tblauthorlist order by fldauthor_index";
                                                        $result = $conn->query($sql);
                                                        if($result->num_rows > 0) 
                                                        {
                                                        while($row = $result->fetch_assoc())
                                                        {
                
                                                        $vindex3=$row['fldauthor_index'];			
                                                        $vrow31=$row['fldbooknum'];	
                                                        $vrow32=$row['fldauthor'];
                                                        ?>

                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    <?php
                                                                    echo $vindex3;
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    echo $row['fldbooknum'];
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    echo $row['fldauthor'];
                                                                    ?>
                                                                </td>
                                                                <!-- onClick needs specific webpages (WIP) -->
                                                                <td>
                                                                    <button type="button" onClick="window.location.href='author_update.php?vid=<?php echo $vindex3; ?>'">Edit</button>
                                                                </td>
                                                                <td>
                                                                   <button type="button" onClick="window.location.href='author_delete.php?vid=<?php echo $vindex3; ?>'">Delete</button>
                                                                </td>
                                                                 <!-- onClick needs specific webpages (WIP) -->
                                                            </tr>
                                                            
                                                        <?php
                                                        }  
                                                        }   
                                                        ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 id="listAvail">List of Availability</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover" id="dataTables-availability">
                                                        <thead>
                                                            <tr>
                                                                <th>Availability Record</th>
                                                                <th><a href="#listBooks">Book Number</th>
                                                                <th><a href="#availStat">Availability Status</th>
                                                                <th><a href="#listDates">Date Index</th>
                                                                <td colspan="2" align=center>
                                                                    <button type="button" onClick="window.location.href='avail_insert.php'">Insert</button>
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        <?php
                                                        $sql = "SELECT * FROM tblavailist order by fldavail_record";
                                                        $result = $conn->query($sql);
                                                        if($result->num_rows > 0) 
                                                        {
                                                        while($row = $result->fetch_assoc())
                                                        {
                
                                                        $vindex4=$row['fldavail_record'];			
                                                        $vrow41=$row['fldbooknum'];	
                                                        $vrow42=$row['fldavailstat'];
                                                        $vrow43=$row['flddate_code'];
                                                        ?>

                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    <?php
                                                                    echo $vindex4;
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    echo $row['fldbooknum'];
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    echo $row['fldavailstat'];
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    echo $row['flddate_code'];
                                                                    ?>
                                                                </td>
                                                                <!-- onClick needs specific webpages (WIP) -->
                                                                <td>
                                                                    <button type="button" onClick="window.location.href='avail_update.php?vid=<?php echo $vindex4; ?>'">Edit</button>
                                                                </td>
                                                                <td>
                                                                   <button type="button" onClick="window.location.href='avail_delete.php?vid=<?php echo $vindex4; ?>'">Delete</button>
                                                                </td>
                                                                 <!-- onClick needs specific webpages (WIP) -->
                                                            </tr>
                                                            
                                                        <?php
                                                        }  
                                                        }   
                                                        ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 id="availStat">Availability Status</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover" id="dataTables-availstatus">
                                                        <thead>
                                                            <tr>
                                                                <th>Availability Index</th>
                                                                <th>Status</th>
                                                                <td colspan="2" align=center>
                                                                    <button type="button" onClick="window.location.href='status_insert.php'">Insert</button>
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        <?php
                                                        $sql = "SELECT * FROM tblstatus order by fldavailstat";
                                                        $result = $conn->query($sql);
                                                        if($result->num_rows > 0) 
                                                        {
                                                        while($row = $result->fetch_assoc())
                                                        {
                
                                                        $vindex5=$row['fldavailstat'];			
                                                        $vrow51=$row['fldstatus'];
                                                        ?>

                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    <?php
                                                                    echo $vindex5;
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    echo $row['fldstatus'];
                                                                    ?>
                                                                </td>
                                                                <!-- onClick needs specific webpages (WIP) -->
                                                                <td>
                                                                    <button type="button" onClick="window.location.href='status_update.php?vid=<?php echo $vindex5; ?>'">Edit</button>
                                                                </td>
                                                                <td>
                                                                   <button type="button" onClick="window.location.href='status_delete.php?vid=<?php echo $vindex5; ?>'">Delete</button>
                                                                </td>
                                                                 <!-- onClick needs specific webpages (WIP) -->
                                                            </tr>
                                                            
                                                        <?php
                                                        }  
                                                        }   
                                                        ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 id="listDates">Date List</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover" id="dataTables-date">
                                                        <thead>
                                                            <tr>
                                                                <th>Date Index</th>
                                                                <th>Return Due</th>
                                                                <td colspan="2" align=center>
                                                                    <button type="button" onClick="window.location.href='date_insert.php'">Insert</button>
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        <?php
                                                        $sql = "SELECT * FROM tbldatelist order by flddate_code";
                                                        $result = $conn->query($sql);
                                                        if($result->num_rows > 0) 
                                                        {
                                                        while($row = $result->fetch_assoc())
                                                        {
                
                                                        $vindex6=$row['flddate_code'];			
                                                        $vrow61=$row['fldreturn'];
                                                        ?>

                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    <?php
                                                                    echo $vindex6;
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    echo $row['fldreturn'];
                                                                    ?>
                                                                </td>
                                                                <!-- onClick needs specific webpages (WIP) -->
                                                                <td>
                                                                    <button type="button" onClick="window.location.href='date_update.php?vid=<?php echo $vindex6; ?>'">Edit</button>
                                                                </td>
                                                                <td>
                                                                   <button type="button" onClick="window.location.href='date_delete.php?vid=<?php echo $vindex6; ?>'">Delete</button>
                                                                </td>
                                                                 <!-- onClick needs specific webpages (WIP) -->
                                                            </tr>
                                                            
                                                        <?php
                                                        }  
                                                        }   
                                                        ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 id="student">Borrowing Student Table</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover" id="dataTables-student">
                                                        <thead>
                                                            <tr>
                                                                <th>Student no. #</th>
                                                                <th>First Name</th>
                                                                <th>Last Name</th>
                                                                <th>Middle Initial</th>
                                                                <td colspan="2" align=center>
                                                                    <button type="button" onClick="window.location.href='student_insert.php'">Insert</button>
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        <?php
                                                        $sql = "SELECT * FROM tblstudent order by fldstudindex";
                                                        $result = $conn->query($sql);
                                                        if($result->num_rows > 0) 
                                                        {
                                                        while($row = $result->fetch_assoc())
                                                        {
                                                    
                                                        $vindex7=$row['fldstudnum'];			
                                                        $vrow71=$row['fldfirstname'];	
                                                        $vrow72=$row['fldlastname'];
                                                        $vrow73=$row['fldmiddleinit'];
                                                        ?>

                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    <?php
                                                                    echo $vindex7;
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    echo $row['fldfirstname'];
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    echo $row['fldlastname'];
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    echo $row['fldmiddleinit'];
                                                                    ?>
                                                                </td>
                                                                <!-- onClick needs specific webpages (WIP) -->
                                                                <td>
                                                                    <button type="button" onClick="window.location.href='student_update.php?vid=<?php echo $vindex7; ?>'">Edit</button>
                                                                </td>
                                                                <td>
                                                                   <button type="button" onClick="window.location.href='student_delete.php?vid=<?php echo $vindex7; ?>'">Delete</button>
                                                                </td>
                                                                 <!-- onClick needs specific webpages (WIP) -->
                                                            </tr>
                                                            
                                                        <?php
                                                        }  
                                                        }   
                                                        ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 id="retri">Retrieval Log</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover" id="dataTables-retrieval">
                                                        <thead>
                                                            <tr>
                                                                <th>Retrieval Code</th>
                                                                <th><a href="#listDates">Date Code</th>
                                                                <th>Date Recieved</th>
                                                                <td colspan="2" align=center>
                                                                    <button type="button" onClick="window.location.href='retri_insert.php'">Insert</button>
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        <?php
                                                        $sql = "SELECT * FROM tblretrilog order by fldretrieval_index";
                                                        $result = $conn->query($sql);
                                                        if($result->num_rows > 0) 
                                                        {
                                                        while($row = $result->fetch_assoc())
                                                        {
                
                                                        $vindex8=$row['fldretrieval_code'];			
                                                        $vrow81=$row['flddate_code'];	
                                                        $vrow82=$row['fldreceived'];
                                                        ?>

                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    <?php
                                                                    echo $vindex8;
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    echo $row['flddate_code'];
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    echo $row['fldreceived'];
                                                                    ?>
                                                                </td>
                                                                <!-- onClick needs specific webpages (WIP) -->
                                                                <td>
                                                                    <button type="button" onClick="window.location.href='retri_update.php?vid=<?php echo $vindex8; ?>'">Edit</button>
                                                                </td>
                                                                <td>
                                                                   <button type="button" onClick="window.location.href='retri_delete.php?vid=<?php echo $vindex8; ?>'">Delete</button>
                                                                </td>
                                                                 <!-- onClick needs specific webpages (WIP) -->
                                                            </tr>
                                                            
                                                        <?php
                                                        }  
                                                        }   
                                                        ?>

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
             $('#dataTables-master').dataTable();
         });
    </script>
    <script>
         $(document).ready(function () {
             $('#dataTables-books').dataTable();
         });
    </script>
    <script>
         $(document).ready(function () {
             $('#dataTables-authors').dataTable();
         });
    </script>
    <script>
         $(document).ready(function () {
             $('#dataTables-availability').dataTable();
         });
    </script>
    <script>
         $(document).ready(function () {
             $('#dataTables-availstatus').dataTable();
         });
    </script>
    <script>
         $(document).ready(function () {
             $('#dataTables-date').dataTable();
         });
    </script>
    <script>
         $(document).ready(function () {
             $('#dataTables-student').dataTable();
         });
    </script>
    <script>
         $(document).ready(function () {
             $('#dataTables-retrieval').dataTable();
         });
    </script>
     <!-- END PAGE LEVEL SCRIPTS -->
</body>
     <!-- END BODY -->
</html>
