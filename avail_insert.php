<?php
require("include/conn.php");

$vindex4="";	
$vrow41="";
$vrow42="";
$vrow43="";

?>
<form  action="avail_insert-save.php" method="post" name="formadd" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td colspan="2" align=center>
                <b>Insert Availability Entry</b>
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Availability Record: </label>  
            </td>
            <td>
                <input type="text" id="txtavailrec" name="txtavailrec" value="<?php echo $vindex4; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Book Number: </label>  
            </td>
            <td>
                <input type="text" id="txtbooknum" name="txtbooknum" value="<?php echo $vrow41; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Availability Status: </label>  
            </td>
            <td>
                <input type="text" id="txtavailstat" name="txtavailstat" value="<?php echo $vrow42; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Date Code: </label>  
            </td>
            <td>
                <input type="text" id="txtdate" name="txtdate" value="<?php echo $vrow43; ?>"/>                       
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

