<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

 <!-- BEGIN HEAD -->
<head>
      <meta charset="UTF-8" />
    <title>DLSL LMS | Quick Borrower no Jutsu</title>
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
    
 <link href="assets/css/jquery-ui.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/plugins/uniform/themes/default/css/uniform.default.css" />
<link rel="stylesheet" href="assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css" />
<link rel="stylesheet" href="assets/plugins/chosen/chosen.min.css" />
<link rel="stylesheet" href="assets/plugins/colorpicker/css/colorpicker.css" />
<link rel="stylesheet" href="assets/plugins/tagsinput/jquery.tagsinput.css" />
<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker-bs3.css" />
<link rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.css" />
<link rel="stylesheet" href="assets/plugins/timepicker/css/bootstrap-timepicker.min.css" />
<link rel="stylesheet" href="assets/plugins/switch/static/stylesheets/bootstrap-switch.css" />
   
    <!-- END PAGE LEVEL  STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

                                                  
<?php
require("include/conn.php");

$firstname="";
$lastname="";
$middleinit="";
$studnum="";
$borrower_index=""; //?
$retri=""; //code
$date_code=""; //?
$return="";  //?
$vbook1="AR001";
$vbook2="AR002";
$vbook3="AR003";
$vbook4="AR004";
$vbook5="AR005";
$vbook6="AR006";
$vbook7="AR007";
$vbook8="AR008";
$vbook9="AR009";
$vbook10="AR010";
$vbook11="AR011";
$vbook12="AR012";
$vbook13="AR013";
$vbook14="AR014";
$vbook15="AR015";
$vbook16="AR016";
$vbook17="AR017";
$vbook18="AR018";
$vbook19="AR019";
$vbook20="AR020";
$vbook21="AR021";

?>

<div class="row">
<div class="col-lg-12">
    <div class="box dark">
        <header>
            <div class="icons"><i class="icon-edit"></i></div>
            <h5>Student Fill Out Form </h5>
            <div class="toolbar">
                <ul class="nav">
                    <li>
                        <a class="accordion-toggle minimize-box" data-toggle="collapse" href="#div-1">
                            <i class="icon-chevron-up"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </header>
        <div id="div-1" class="accordion-body collapse in body">
            <form class="form-horizontal" action="master_borrow-save.php" method="post" name="formadd" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="text" class="control-label col-lg-4">Student Name</label>

                    <div class="col-lg-5">
                        <input type="text" id="firstname" name="firstname" value="<?php echo $firstname; ?>" placeholder="Type first name" class="form-control" />
                        <br>
                        <input type="text" id="lastname" name="lastname" value="<?php echo $lastname; ?>" placeholder="Type last name" class="form-control" />
                        <br>
                        <input type="text" id="middleinit" name="middleinit" value="<?php echo $middleinit; ?>" placeholder="Type middle initial" class="form-control" />
                    </div>
                </div>
                    
                <div class="form-group">
                    <label for="text" class="control-label col-lg-4">Student Number</label>

                    <div class="col-lg-5">
                        <input type="text" id="studnum" name="studnum" value="<?php echo $studnum; ?>" placeholder="Type student number" class="form-control" />
                    </div>
                </div>

                    <div id="dateRangePickerBlock" class="body collapse in">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-lg-4" for="reservation">Date Borrowed to Date Due</label>
        
                                <div class="col-lg-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                        <input type="text" id="reservation" name="reservation" value="<?php echo $date_code; ?>" class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-4">Book to be Borrowed</label>
                            
                                <div class="col-lg-5">
                                    <select id="books" name="books" data-placeholder="Select the books you want to borrow" class="form-control chzn-select" tabindex="6">
                                        <optgroup label="Fiction">
                                            <option value="<?php echo $vbook4; ?>">You Only Call When You're in Trouble: A Novel</option>
                                            <option value="<?php echo $vbook6; ?>">The Memory Library</option>
                                            <option value="<?php echo $vbook8; ?>">The Dead Take the A Train</option>
                                            <option value="<?php echo $vbook10; ?>">Never Lie</option>
                                            <option value="<?php echo $vbook12; ?>">The Edge</option>
                                            <option value="<?php echo $vbook13; ?>">The Road to Jerusalem</option>
                                            <option value="<?php echo $vbook15; ?>">Prime Deceptions: A Novel</option>
                                            <option value="<?php echo $vbook17; ?>">The Teacher</option>
                                            <option value="<?php echo $vbook19; ?>">The Swimmer: A Novel</option>
                                        </optgroup>
                                        <optgroup label="Light Novel">
                                            <option value="<?php echo $vbook1; ?>">That Time I Got Reincarnated as a Slime, Vol. 13</option>
                                            <option value="<?php echo $vbook2; ?>">Sasaki and Peeps, Vol. 5</option>
                                            <option value="<?php echo $vbook3; ?>">Mushoku Tensei: Jobless Reincarnation, Vol. 15</option>
                                        </optgroup>
                                        <optgroup label="Fantasy">
                                            <option value="<?php echo $vbook1; ?>">That Time I Got Reincarnated as a Slime, Vol. 13</option>
                                            <option value="<?php echo $vbook2; ?>">Sasaki and Peeps, Vol. 5</option>
                                            <option value="<?php echo $vbook3; ?>">Mushoku Tensei: Jobless Reincarnation, Vol. 15</option>
                                            <option value="<?php echo $vbook8; ?>">The Dead Take the A Train</option>
                                            <option value="<?php echo $vbook9; ?>">A Court of Mist and Fury</option>
                                        </optgroup>
                                        <optgroup label="Action">
                                            <option value="<?php echo $vbook12; ?>">The Edge</option>
                                            <option value="<?php echo $vbook19; ?>">The Swimmer: A Novel</option>
                                            <option value="<?php echo $vbook20; ?>">Island 731</option>
                                            <option value="<?php echo $vbook21; ?>">SecondWorld</option>
                                        </optgroup>
                                        <optgroup label="Thriller">
                                            <option value="<?php echo $vbook5; ?>">Dark State</option>
                                            <option value="<?php echo $vbook7; ?>">The Guardians: A Novel</option>
                                            <option value="<?php echo $vbook10; ?>">Never Lie</option>
                                            <option value="<?php echo $vbook13; ?>">The Road to Jerusalem</option>
                                            <option value="<?php echo $vbook14; ?>">Matterhorn</option>
                                            <option value="<?php echo $vbook16; ?>">The Perfect Son</option>
                                            <option value="<?php echo $vbook17; ?>">The Teacher</option>
                                            <option value="<?php echo $vbook18; ?>">The Housemaid</option>
                                            <option value="<?php echo $vbook20; ?>">Island 731</option>
                                            <option value="<?php echo $vbook21; ?>">SecondWorld</option>
                                        </optgroup>
                                        <optgroup label="Suspense">
                                            <option value="<?php echo $vbook7; ?>">The Guardians: A Novel</option>
                                            <option value="<?php echo $vbook11; ?>">Day of Horror: Novel</option>
                                            <option value="<?php echo $vbook14; ?>">Matterhorn</option>
                                            <option value="<?php echo $vbook18; ?>">The Housemaid</option>
                                            <option value="<?php echo $vbook20; ?>">Island 731</option>
                                            <option value="<?php echo $vbook21; ?>">SecondWorld</option>
                                        </optgroup>
                                        <optgroup label="Psychological">
                                            <option value="<?php echo $vbook16; ?>">The Perfect Son</option>
                                            <option value="<?php echo $vbook17; ?>">The Teacher</option>
                                            <option value="<?php echo $vbook18; ?>">The Housemaid</option>
                                        </optgroup>
                                        <optgroup label="Mystery">
                                            <option value="<?php echo $vbook12; ?>">The Edge</option>
                                            <option value="<?php echo $vbook20; ?>">Island 731</option>
                                            <option value="<?php echo $vbook21; ?>">SecondWorld</option>
                                        </optgroup>
                                        <optgroup label="Adventure">
                                            <option value="<?php echo $vbook3; ?>">Mushoku Tensei: Jobless Reincarnation, Vol. 15</option>
                                            <option value="<?php echo $vbook12; ?>">The Edge</option>
                                            <option value="<?php echo $vbook20; ?>">Island 731</option>
                                            <option value="<?php echo $vbook21; ?>">SecondWorld</option>
                                        </optgroup>
                                        <optgroup label="Horror">
                                            <option value="<?php echo $vbook8; ?>">The Dead Take the A Train</option>
                                            <option value="<?php echo $vbook11; ?>">Day of Horror: Novel</option>
                                        </optgroup>
                                        <optgroup label="Folklore">
                                            <option value="<?php echo $vbook9; ?>">A Court of Mist and Fury</option>
                                        </optgroup>
                                        <optgroup label="Science Fiction">
                                            <option value="<?php echo $vbook15; ?>">Prime Deceptions:A novel</option>
                                        </optgroup>
                                        <optgroup label="Historical">
                                            <option value="<?php echo $vbook13; ?>">The Road to Jerusalem</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <hr>
<?php
require("include/conn.php");

$index8="";
$sql = "SELECT * FROM tblretrilog order by fldretrieval_index";
$result = $conn->query($sql);
if($result->num_rows > 0) 
{
while($row = $result->fetch_assoc())
{
    $index8=$row['fldretrieval_code'];
}

}

$borrower="";
$sql = "SELECT * FROM tbllibrarian order by fldborrower_index";
$result = $conn->query($sql);
if($result->num_rows > 0) 
{
while($row = $result->fetch_assoc())
{
    $borrower=$row['fldborrower_index'];
}

}
?>
                            <h3 align=center><b>Go up by ONE for every new entry</b></h3>
                            <div class="form-group">
                                <label for="text" class="control-label col-lg-4">Enter Retrieval Code: </label>

                                <div class="col-lg-5">
                                    <input type="text" id="retri" name="retri" value="<?php echo $index8; ?>" class="form-control" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text" class="control-label col-lg-4">Enter Borrower Index: </label>

                                <div class="col-lg-5">
                                    <input type="text" id="borrower_index" name="borrower_index" value="<?php echo $borrower; ?>" class="form-control" />
                                </div>
                            </div>

                            <div class="col-lg-12" align=center>
                                <button class="btn text-muted text-center btn-success" type="submit" >Save</button>
                                <button class="btn text-muted text-center btn-success" type="reset" onClick="history.back()">Cancel</button>
                            </div>
            </form>
        </div>
    </div>
</div>
   
    </div>
  
</select>
</div>
</div>


<!-- END TIME PICKER -->




                    
                 
        <!-- END PAGE CONTENT -->

        
       <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
   <div id="footer">
        <p>&copy;  De La Salle Lipa . Learning Resource Center &nbsp;2024 &nbsp;</p>
    </div>
    <!--END FOOTER -->


     <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->


      <!-- PAGE LEVEL SCRIPT-->
 <script src="assets/js/jquery-ui.min.js"></script>
 <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="assets/plugins/chosen/chosen.jquery.min.js"></script>
<script src="assets/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script src="assets/plugins/validVal/js/jquery.validVal.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="assets/plugins/switch/static/js/bootstrap-switch.min.js"></script>
<script src="assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>
<script src="assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="assets/plugins/jasny/js/bootstrap-inputmask.js"></script>
       <script src="assets/js/formsInit.js"></script>
        <script>
            $(function () { formInit(); });
        </script>
        
     <!--END PAGE LEVEL SCRIPT-->
     
</body>
     <!-- END BODY -->
</html>
