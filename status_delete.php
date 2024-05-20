<?php
require("include/conn.php");

$vindex5=$_REQUEST['vid'];

$sql = "SELECT * FROM tblstatus where fldavailstat='$vindex5' order by fldavailstat ";
$result = $conn->query($sql);
if($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
        $vrow51=$row['fldstatus'];	 
    }
}

?>
<table border=1>
    <tr>
        <td colspan="2">
            Are you sure you want to <b>delete</b> this entry?
        </td>
    </tr>
    <tr align=center>
        <td>
            <button type="button" onClick="window.location.href='status_delete-save.php?vid=<?php echo $vindex5; ?>'">Delete</button>
        </td>
        <td>
            <button type="reset" onClick="history.back()">Cancel</button>
        </td>
    </tr>
</table>
