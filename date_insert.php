<?php
require("include/conn.php");

$vindex6="";	
$vrow61="";

?>
<form  action="date_insert-save.php" method="post" name="formadd" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td colspan="2" align=center>
                <b>Insert Date Entry</b>
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Date Code:</label>  
            </td>
            <td>
                <input type="text" id="txtdatecode" name="txtdatecode" value="<?php echo $vindex6; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter the Return Due:</label>  
            </td>
            <td>
                <input type="text" id="txtdate" name="txtdate" value="<?php echo $vrow61; ?>"/>                       
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

