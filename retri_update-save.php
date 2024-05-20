<?php
require("include/conn.php");

$vindex8=$_POST['txtretrinum'];
$vrow82=$_POST['txtretridate'];

$sql = "UPDATE tblretrilog SET fldreceived='$vrow82' WHERE fldretrieval_code='$vindex8'";

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
<meta  http-equiv="refresh" content=".000001;url=file_management.php#retri" />