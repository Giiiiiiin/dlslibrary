<?php
require("include/conn.php");

$vindex4=$_REQUEST['vid'];
$vrow41="";
$vrow42="";
$vrow43="";

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
<form  action="avail_update-save.php" method="post" name="formadd" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td colspan="2" align=center>
                <b>Update Record Entry</b>
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Existing Availability Record: </label>  
            </td>
            <td>
                <input type="text" id="txtavailrec" name="txtavailrec" value="<?php echo $vindex4; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Book Number: </label>  
            </td>
            <td>
                <p><?php echo $vrow41; ?></p>
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Availability Status [A0/A1]: </label>  
            </td>
            <td>
                <input type="text" id="txtavailstat" name="txtavailstat" value="<?php echo $vrow42; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Date Code: </label>  
            </td>
            <td>
                <p><?php echo $vrow43; ?></p>
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

