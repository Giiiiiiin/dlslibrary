<?php
require("include/conn.php");

$del=$_REQUEST['vid'];

$sql = "DELETE FROM tblstatus WHERE fldavailstat='$del'";

if ($conn->query($sql) === TRUE) {
  //echo "Record deleted successfully";
} else {
  //echo "Error deleting record: " . $conn->error;
}
?>
<script>
    alert("Record Successfully Deleted.");								
</script>

<meta  http-equiv="refresh" content=".000001;url=file_management.php#availStat" />