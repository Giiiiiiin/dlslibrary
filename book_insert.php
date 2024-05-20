<?php
require("include/conn.php");

$vbooknum="";
$vtitle="";
$vauthorindex="";
$vavailrecord="";

?>
<form  action="book_insert-save.php" method="post" name="formadd" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td colspan="2" align=center>
                <b>New Book Entry</b>
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Book Number: </label>  
            </td>
            <td>
                <input type="text" id="txtbooknum" name="txtbooknum" value="<?php echo $vbooknum; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Book Title: </label>  
            </td>
            <td>
                <input type="text" id="txttitle" name="txttitle" value="<?php echo $vtitle; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Author Index: </label>  
            </td>
            <td>
                <input type="text" id="txtauthor" name="txtauthor" value="<?php echo $vauthorindex; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Availability Record: </label>  
            </td>
            <td>
                <input type="text" id="txtavail" name="txtavail" value="<?php echo $vavailrecord; ?>"/>                       
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

