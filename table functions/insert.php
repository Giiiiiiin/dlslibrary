<?php
require("include/conn.php");

$vstudno="";
$vlastname="";
$vfirstname="";

?>
<form  action="insert-save.php" method="post" name="formadd" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td colspan="2" align=center>
                <b>Insert Student</b>
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Student Number:</label>  
            </td>
            <td>
                <input type="text" id="txtstudno" name="txtstudno" value="<?php echo $vstudno; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Last Name:</label>  
            </td>
            <td>
                <input type="text" id="txtlastname" name="txtlastname" value="<?php echo $vlastname; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter First Name:</label>  
            </td>
            <td>
                <input type="text" id="txtfirstname" name="txtfirstname" value="<?php echo $vfirstname; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td colspan="2" align=center>
                <button type="submit" >Save</button>
                <button type="reset" onClick="window.location.href='select.php'">Cancel</button>
            </td>
        </tr>
    </table>
</form>

