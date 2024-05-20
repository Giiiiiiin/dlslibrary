<?php
require("include/conn.php");

$vindex3="";			
$vrow31="";
$vrow32="";

?>
<form  action="author_insert-save.php" method="post" name="formadd" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td colspan="2" align=center>
                <b>Insert Author Entry</b>
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Author Index: </label>  
            </td>
            <td>
                <input type="text" id="txtauthorind" name="txtauthorind" value="<?php echo $vindex3; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Book Number: </label>  
            </td>
            <td>
                <input type="text" id="txtbooknum" name="txtbooknum" value="<?php echo $vrow31; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Author Name:</label>  
            </td>
            <td>
                <input type="text" id="txtauthor" name="txtauthor" value="<?php echo $vrow32; ?>"/>                       
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

