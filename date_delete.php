<?php
require("include/conn.php");

$vindex6=$_REQUEST['vid'];

$sql = "SELECT * FROM tbldatelist where flddate_code='$vindex6' order by flddate_code";
$result = $conn->query($sql);
if($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
        $vrow61=$row['fldreturn'];    
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
            <button type="button" onClick="window.location.href='date_delete-save.php?vid=<?php echo $vindex6; ?>'">Delete</button>
        </td>
        <td>
            <button type="reset" onClick="history.back()">Cancel</button>
        </td>
    </tr>
</table>
