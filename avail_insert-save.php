<?php
require("include/conn.php");

$vindex4=$_POST['txtavailrec'];			
$vrow41=$_POST['txtbooknum'];
$vrow42=$_POST['txtavailstat'];
$vrow43=$_POST['txtdate'];

$sql="INSERT INTO tblavailist (fldavail_record, fldbooknum, fldavailstat, flddate_code) VALUES ('$vindex4', '$vrow41', '$vrow42', '$vrow43')";
if ($conn->query($sql) === TRUE) 
{
} 
else 
{            
} 

?>
<script>
    alert("Record Saved.");								
</script>
<meta  http-equiv="refresh" content=".000001;url=file_management.php#listAvail" />