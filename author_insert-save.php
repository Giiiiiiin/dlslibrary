<?php
require("include/conn.php");

$vindex3=$_POST['txtauthorind'];		
$vrow31=$_POST['txtbooknum'];
$vrow32=$_POST['txtauthor'];


$sql="INSERT INTO tblauthorlist (fldauthor_index, fldbooknum, fldauthor) VALUES ('$vindex3', '$vrow31', '$vrow32')";
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
<meta  http-equiv="refresh" content=".000001;url=file_management.php#listAuthors" />