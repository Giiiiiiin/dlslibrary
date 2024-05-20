<?php
require("include/conn.php");

$vborrower="";
$vbooknum="";
$vstudnum="";
$vretri="";

?>
<form  action="master_insert-save.php" method="post" name="formadd" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td colspan="2" align=center>
                <b>Insert Borrower Entry</b>
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Borrower Index: </label>  
            </td>
            <td>
                <input type="text" id="txtborrindex" name="txtborrindex" value="<?php echo $vborrower; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Book Number:</label>  
            </td>
            <td>
                <input type="text" id="txtbooknum" name="txtbooknum" value="<?php echo $vbooknum; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Student Number:</label>  
            </td>
            <td>
                <input type="text" id="txtstudnum" name="txtstudnum" value="<?php echo $vstudnum; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Retrieval Code:</label>  
            </td>
            <td>
                <input type="text" id="txtretri" name="txtretri" value="<?php echo $vretri; ?>"/>                       
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

