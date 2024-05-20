<?php
require("include/conn.php");

$vindex8="";
$vrow81="";
$vrow82="";

?>
<form  action="retri_insert-save.php" method="post" name="formadd" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td colspan="2" align=center>
                <b>Insert Retrieval Entry</b>
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Retrieval Index: </label>  
            </td>
            <td>
                <input type="text" id="txtretrinum" name="txtretrinum" value="<?php echo $vindex8; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Date Index: </label>  
            </td>
            <td>
                <input type="text" id="txtdatenum" name="txtdatenum" value="<?php echo $vrow81; ?>"/>                       
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
                <button type="submit" >Save</button>
                <button type="reset" onClick="history.back()">Cancel</button>
            </td>
        </tr>
    </table>
</form>

