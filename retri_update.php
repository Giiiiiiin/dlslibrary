<?php
require("include/conn.php");

$vindex8=$_REQUEST['vid'];			
$vrow81="";	
$vrow82="";


$sql = "SELECT * FROM tblretrilog where fldretrieval_code='$vindex8' order by fldretrieval_index ";
$result = $conn->query($sql);
if($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
        $vrow81=$row['flddate_code'];	
        $vrow82=$row['fldreceived'];   
    }
}

?>
<form  action="retri_update-save.php" method="post" name="formadd" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td colspan="2" align=center>
                <b>Update Retrieval Entry</b>
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Existing Retrieval Code: </label>  
            </td>
            <td>
                <input type="text" id="txtretrinum" name="txtretrinum" value="<?php echo $vindex8; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Date Index: </label>  
            </td>
            <td>
                <p><?php echo $vrow81; ?></p>                      
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Date Retrieved: </label>  
            </td>
            <td>
                <input type="text" id="txtretridate" name="txtretridate" value="<?php echo $vrow82; ?>"/>                       
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

