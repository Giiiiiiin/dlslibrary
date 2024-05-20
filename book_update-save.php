<?php
require("include/conn.php");

$vindex2=$_POST['txtbooknum'];
$vrow21=$_POST['txttitle'];

$sql = "UPDATE tblbooklist SET fldtitle='$vrow21' WHERE fldbooknum='$vindex2'";
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
<meta  http-equiv="refresh" content=".000001;url=file_management.php#listBooks" />