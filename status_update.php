<?php
require("include/conn.php");

$vindex5=$_REQUEST['vid'];		
$vrow51="";

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
<form  action="status_update-save.php" method="post" name="formadd" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td colspan="2" align=center>
                <b>Update Availability Entry</b>
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Existing Availability Record: </label>  
            </td>
            <td>
                <input type="text" id="txtavailrec" name="txtavailrec" value="<?php echo $vindex5; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Availability Description: </label>  
            </td>
            <td>
                <input type="text" id="txtavaildesc" name="txtavaildesc" value="<?php echo $vrow51; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td colspan="2" align=center>
                <button type="submit" >Update</button>
                <button type="reset" onClick="history.back()">Cancel</button>
            </td>
        </tr>
    </table>
</form>

