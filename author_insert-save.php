<?php
require("include/conn.php");

$vindex3=$_POST['txtauthorind'];	
$vrow32=$_POST['txtauthor'];


$sql="INSERT INTO tblauthorlist (fldauthor_index, fldauthor) VALUES ('$vindex3', '$vrow32')";
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