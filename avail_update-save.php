<?php
require("include/conn.php");

$vindex4=$_POST['txtavailrec'];
$vrow42=$_POST['txtavailstat'];

$sql = "UPDATE tblavailist SET fldavailstat='$vrow42' WHERE fldavail_record='$vindex4'";
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
<meta  http-equiv="refresh" content=".000001;url=file_management.php#listAvail" />