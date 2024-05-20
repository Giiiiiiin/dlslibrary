<?php
require("include/conn.php");

$vstudno=$_REQUEST['vid'];

$sql = "SELECT * FROM tblstudent where fldstudno='$vstudno' order by fldindex ";
$result = $conn->query($sql);
if($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
        $vlastname=$row['fldlastname'];	
        $vfirstname=$row['fldfirstname'];   
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
            <button type="button" onClick="window.location.href='delete-save.php?vid=<?php echo $vstudno; ?>'">Delete</button>
        </td>
        <td>
            <button type="reset" onClick="window.location.href='select.php'">Cancel</button>
        </td>
    </tr>
</table>
