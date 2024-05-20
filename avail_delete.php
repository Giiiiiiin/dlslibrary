<?php
require("include/conn.php");

$vindex4=$_REQUEST['vid'];

$sql = "SELECT * FROM tblavailist where fldavail_record='$vindex4' order by fldavail_record ";
$result = $conn->query($sql);
if($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
        $vrow41=$row['fldbooknum'];	
        $vrow42=$row['fldavailstat'];	
        $vrow43=$row['flddate_code']; 
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
            <button type="button" onClick="window.location.href='avail_delete-save.php?vid=<?php echo $vindex4; ?>'">Delete</button>
        </td>
        <td>
            <button type="reset" onClick="history.back()">Cancel</button>
        </td>
    </tr>
</table>
