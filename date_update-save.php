<?php
require("include/conn.php");

$vindex6=$_POST['txtdatecode'];
$vrow61=$_POST['txtdate'];

$sql = "UPDATE tbldatelist SET fldreturn='$vrow61' WHERE flddate_code='$vindex6'";
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
<meta  http-equiv="refresh" content=".000001;url=file_management.php#listDates" />