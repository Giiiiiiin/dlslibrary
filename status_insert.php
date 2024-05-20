<?php
require("include/conn.php");

$vindex5="";		
$vrow51="";

?>
<form  action="status_insert-save.php" method="post" name="formadd" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td colspan="2" align=center>
                <b>Insert New Book Status</b>
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Status Code: </label>  
            </td>
            <td>
                <input type="text" id="txtstatcode" name="txtstatcode" value="<?php echo $vindex5; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Status Description: </label>  
            </td>
            <td>
                <input type="text" id="txtstatdesc" name="txtstatdesc" value="<?php echo $vrow51; ?>"/>                       
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

