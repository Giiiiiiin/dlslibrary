<?php
require("include/conn.php");

$vindex2=$_REQUEST['vid'];

$sql = "SELECT * FROM tblbooklist where fldbooknum='$vindex2' order by fldbook_index ";
$result = $conn->query($sql);
if($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
        $vrow21=$row['fldtitle'];	
        $vrow22=$row['fldauthor_index'];   
        $vrow23=$row['fldavail_record'];   
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
            <button type="button" onClick="window.location.href='book_delete-save.php?vid=<?php echo $vindex2; ?>'">Delete</button>
        </td>
        <td>
            <button type="reset" onClick="history.back()">Cancel</button>
        </td>
    </tr>
</table>
