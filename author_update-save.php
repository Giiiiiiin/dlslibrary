<?php
require("include/conn.php");

$vindex3=$_POST['txtauthorind'];		
$vrow32=$_POST['txtauthor'];

$sql = "UPDATE tblauthorlist SET fldauthor='$vrow32' WHERE fldauthor_index='$vindex3'";
if ($conn->query($sql) === TRUE) 
{
    //echo "Record updated successfully";
} 
else 
{
    //echo "Error updating record: " . mysqli_error($conn);
}

?>
<script>
    alert("Record Updated.");								
</script>
<meta  http-equiv="refresh" content=".000001;url=file_management.php#listAuthors" />