<?php
require("include/conn.php");

$vstudnum=$_POST['txtstudnum'];
$vfirstname=$_POST['txtfirstname'];
$vlastname=$_POST['txtlastname'];
$vmiddleinit=$_POST['txtmiddleinit'];

$sql = "UPDATE tblstudent SET fldfirstname='$vfirstname', fldlastname='$vlastname', fldmiddleinit='$vmiddleinit' WHERE fldstudnum='$vstudnum'";
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
<meta  http-equiv="refresh" content=".000001;url=file_management.php#student" />