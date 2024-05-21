<?php
require("include/conn.php");

$vindex3=$_REQUEST['vid'];

$sql = "SELECT * FROM tblauthorlist where fldauthor_index='$vindex3' order by fldauthor_index ";
$result = $conn->query($sql);
if($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
        $vrow32=$row['fldauthor'];  
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
            <button type="button" onClick="window.location.href='author_delete-save.php?vid=<?php echo $vindex3; ?>'">Delete</button>
        </td>
        <td>
            <button type="reset" onClick="history.back()">Cancel</button>
        </td>
    </tr>
</table>
