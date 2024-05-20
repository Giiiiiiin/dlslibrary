<?php
require("include/conn.php");

$vborrindex=$_REQUEST['vid'];

$sql = "SELECT * FROM tbllibrarian where fldborrower_index='$vborrindex' order by fldborrower_index";
$result = $conn->query($sql);
if($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
        $vbooknum=$row['fldbooknum'];	
        $vstudnum=$row['fldstudnum'];   
        $vretri=$row['fldretri'];
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
            <button type="button" onClick="window.location.href='master_delete-save.php?vid=<?php echo $vborrindex; ?>'">Delete</button>
        </td>
        <td>
            <button type="reset" onClick="history.back()">Cancel</button>
        </td>
    </tr>
</table>
