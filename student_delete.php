<?php
require("include/conn.php");

$vstudnum=$_REQUEST['vid'];

$sql = "SELECT * FROM tblstudent where fldstudnum='$vstudnum' order by fldstudindex";
$result = $conn->query($sql);
if($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
        $vfirstname=$row['fldfirstname'];   
        $vlastname=$row['fldlastname'];	
        $vmiddleinit=$row['fldmiddleinit'];   
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
            <button type="button" onClick="window.location.href='student_delete-save.php?vid=<?php echo $vstudnum; ?>'">Delete</button>
        </td>
        <td>
            <button type="reset" onClick="history.back()">Cancel</button>
        </td>
    </tr>
</table>
