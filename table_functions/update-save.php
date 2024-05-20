<?php
require("include/conn.php");

$vstudno=$_POST['txtstudno'];
$vlastname=$_POST['txtlastname'];
$vfirstname=$_POST['txtfirstname'];

$sql = "UPDATE tblstudent SET fldlastname='$vlastname', fldfirstname='$vfirstname' WHERE fldstudno='$vstudno'";
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
<meta  http-equiv="refresh" content=".000001;url=select.php" />