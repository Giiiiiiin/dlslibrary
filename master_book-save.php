<?php
require("include/conn.php");

$booknum=$_POST['booknum'];
$title=$_POST['title'];
$author_index=$_POST['author_index'];
$author=$_POST['author'];
$avail_record=$_POST['avail_record'];
$availstat=$_POST['availstat'];
$date_code=$_POST['date_code'];
$return=$_POST['return'];

$sql = "SELECT * FROM tbldatelist  order by flddate_index";
        $result = $conn->query($sql);
        if($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                
                $vindex=$row['flddate_index'];			
                
            }
        }
        $vindex=$vindex+1;

$sql="INSERT INTO tbldatelist (flddate_index, flddate_code, fldreturn) VALUES ('$vindex', '$date_code', '$return')";
if ($conn->query($sql) === TRUE) 
{
} 
else 
{            
} 
$sql="INSERT INTO tblavailist (fldavail_record, fldbooknum, fldavailstat, flddate_code) VALUES ('$avail_record', '$booknum', '$availstat', '$date_code')";
if ($conn->query($sql) === TRUE) 
{
} 
else 
{            
} 
$sql="INSERT INTO tblauthorlist (fldauthor_index, fldauthor) VALUES ('$author_index', '$author')";
if ($conn->query($sql) === TRUE) 
{
} 
else 
{            
} 
$vindex1=0;

$sql = "SELECT * FROM tblbooklist  order by fldbook_index";
        $result = $conn->query($sql);
        if($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                
                $vindex=$row['fldbook_index'];			
                
            }
        }
        $vindex1=$vindex+1;

$sql="INSERT INTO tblbooklist (fldbook_index, fldbooknum, fldtitle, fldauthor_index, fldavail_record) VALUES ('$vindex1', '$booknum', '$title', '$author_index', '$avail_record')";
if ($conn->query($sql) === TRUE) 
{
} 
else 
{            
} 

?>
<script>
    alert("Records Saved.");								
</script>
<meta  http-equiv="refresh" content=".000001;url=file_management.php" />