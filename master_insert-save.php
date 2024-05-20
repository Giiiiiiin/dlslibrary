<?php
require("include/conn.php");

$vborrower=$_POST['txtborrindex'];
$vbooknum=$_POST['txtbooknum'];
$vstudnum=$_POST['txtstudnum'];
$vretri=$_POST['txtretri'];

$sql="INSERT INTO tbllibrarian (fldborrower_index, fldbooknum, fldstudnum, fldretri) VALUES ('$vborrower', '$vbooknum', '$vstudnum', '$vretri')";
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
<meta  http-equiv="refresh" content=".000001;url=file_management.php#master" />