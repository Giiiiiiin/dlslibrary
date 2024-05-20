<?php
require("include/conn.php");

$vindex8=$_REQUEST['vid'];

$sql = "SELECT * FROM tblretrilog where fldretrieval_code='$vindex8' order by fldretrieval_index ";
$result = $conn->query($sql);
if($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
        $vrow81=$row['flddate_code'];	
        $vrow82=$row['fldreceived'];   
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
            <button type="button" onClick="window.location.href='retri_delete-save.php?vid=<?php echo $vindex8; ?>'">Delete</button>
        </td>
        <td>
            <button type="reset" onClick="history.back()">Cancel</button>
        </td>
    </tr>
</table>
