<?php
require("include/conn.php");

$vindex7=""; 
$vrow71="";  
$vrow72="";   
$vrow73="";  
?>

<form  action="student_insert-save.php" method="post" name="formadd" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td colspan="2" align=center>
                <b>Student Table</b>
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Student Number: </label>  
            </td>
            <td>
                <input type="text" id="txtstudno" name="txtstudno" value="<?php echo $vindex7; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter First Name:</label>  
            </td>
            <td>
                <input type="text" id="txtfirstname" name="txtfirstname" value="<?php echo $vrow71; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Last Name:</label>  
            </td>
            <td>
                <input type="text" id="txtlastname" name="txtlastname" value="<?php echo $vrow72; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Middle Initial:</label>  
            </td>
            <td>
                <input type="text" id="txtmidinit" name="txtmidinit" value="<?php echo $vrow73; ?>"/>                       
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

