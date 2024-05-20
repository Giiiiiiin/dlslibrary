<?php
require("include/conn.php");

$vindex6=$_REQUEST['vid'];
$vrow61="";

$sql = "SELECT * FROM tbldatelist where flddate_code='$vindex6' order by flddate_code ";
$result = $conn->query($sql);
if($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
        $vrow61=$row['fldreturn'];  
    }
}

?>
<form  action="date_update-save.php" method="post" name="formadd" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td colspan="2" align=center>
                <b>Update Date Code Entry</b>
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Existing Date Code: </label>  
            </td>
            <td>
                <input type="text" id="txtdatecode" name="txtdatecode" value="<?php echo $vindex6; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter the Return Due: </label>  
            </td>
            <td>
                <input type="text" id="txtdate" name="txtdate" value="<?php echo $vrow61; ?>"/>                       
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

