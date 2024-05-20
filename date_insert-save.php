<?php
require("include/conn.php");

$vindex6=$_POST['txtdatecode'];
$vrow61=$_POST['txtdate'];


$sql="INSERT INTO tbldatelist (flddate_code, fldreturn) VALUES ('$vindex6', '$vrow61')";
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
<meta  http-equiv="refresh" content=".000001;url=file_management.php#listDates" />