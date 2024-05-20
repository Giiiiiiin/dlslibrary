<?php
require("include/conn.php");

$vindex5=$_POST['txtstatcode'];	
$vrow51=$_POST['txtstatdesc'];

$sql="INSERT INTO tblstatus (fldavailstat, fldstatus) VALUES ('$vindex5', '$vrow51')";
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
<meta  http-equiv="refresh" content=".000001;url=file_management.php#availStat" />