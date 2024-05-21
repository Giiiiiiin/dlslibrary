<?php
require("include/conn.php");

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$middleinit=$_POST['middleinit'];
$studnum=$_POST['studnum'];
$date_code=$_POST['reservation'];// ? 
$book=$_POST['books'];

$borrower_index=$_POST['borrower_index']; //?
$retri=$_POST['retri']; //code

$newbook="";
$borrowed="A0";
$available="A1";

//===INSERT STUDENT TABLE ENTRY===
$vindex1;
$sql = "SELECT * FROM tblstudent  order by fldstudindex";
        $result = $conn->query($sql);
        if($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                
                $vindex1=$row['fldstudindex'];			
                
            }
        }
        $vindex1=$vindex1+1;

$sql="INSERT INTO tblstudent (fldstudindex, fldstudnum, fldfirstname, fldlastname, fldmiddleinit) VALUES ('$vindex1', '$studnum', '$firstname', '$lastname', '$middleinit')";
if ($conn->query($sql) === TRUE) 
{
} 
else 
{            
} 
//===INSERT STUDENT TABLE ENTRY===

//===UPDATE DATE CODE===
$sql = "SELECT flddate_code FROM tblavailist WHERE fldavail_record='$book'";
$result = $conn->query($sql);
        if($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                
                $date=$row['flddate_code'];			
                
            }
        }

$sql = "UPDATE tbldatelist SET fldreturn='$date_code' WHERE flddate_code='$date' ";
if ($conn->query($sql) === TRUE) 
{
} 
else 
{            
} 
//===UPDATE DATE CODE===

//===INSERT RETRIEVAL LOG ENTRY===
$vindex2=0;

$sql = "SELECT * FROM tblretrilog  order by fldretrieval_index";
        $result = $conn->query($sql);
        if($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                
                $vindex2=$row['fldretrieval_index'];			
                
            }
        }
        $vindex2=$vindex2+1;

$sql="INSERT INTO tblretrilog (fldretrieval_index, fldretrieval_code, flddate_code) VALUES ('$vindex2', '$retri', '$date')";
if ($conn->query($sql) === TRUE) 
{
} 
else 
{            
} 
//===INSERT RETRIEVAL LOG ENTRY===

//===UPDATE AVAIL STAT===
$sql = "UPDATE tblavailist SET fldavailstat='$borrowed' WHERE fldavail_record='$book' AND fldavailstat='$available'";
if ($conn->query($sql) === TRUE) 
{
} 
else 
{            
} 
//===UPDATE AVAIL STAT===

//===INSERT MASTER TABLE ENTRY===
$sql = "SELECT fldbooknum FROM tblavailist WHERE fldavail_record='$book'";
$result = $conn->query($sql);
        if($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                
                $newbook=$row['fldbooknum'];			
                
            }
        }


$sql="INSERT INTO tbllibrarian (fldborrower_index, fldbooknum, fldstudnum, fldretri) VALUES ('$borrower_index', '$newbook', '$studnum', '$retri')";
if ($conn->query($sql) === TRUE) 
{
} 
else 
{            
} 
//===INSERT MASTER TABLE ENTRY===
?>
    <script>
        alert("Record Saved.");								
    </script>
<meta  http-equiv="refresh" content=".000001;url=file_management.php" />