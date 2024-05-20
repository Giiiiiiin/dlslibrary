<?php
require("include/conn.php");

$vindex5=$_POST['txtavailrec'];
$vrow51=$_POST['txtavaildesc'];

$sql = "UPDATE tblstatus SET fldstatus='$vrow51' WHERE fldavailstat='$vindex5'";
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
<meta  http-equiv="refresh" content=".000001;url=file_management.php#availStat" />