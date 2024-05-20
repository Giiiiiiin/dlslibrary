<?php
require("include/conn.php");

$vindex3=$_REQUEST['vid'];			
$vrow31="";
$vrow32="";

$sql = "SELECT * FROM tblauthorlist where fldauthor_index='$vindex3' order by fldauthor_index ";
$result = $conn->query($sql);
if($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
        $vrow31=$row['fldbooknum'];
        $vrow32=$row['fldauthor'];
    }
}

?>
<form  action="author_update-save.php" method="post" name="formadd" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td colspan="2" align=center>
                <b>Update Author Entry</b>
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Existing Author Index: </label>  
            </td>
            <td>
                <input type="text" id="txtauthorind" name="txtauthorind" value="<?php echo $vindex3; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Book Number:</label>  
            </td>
            <td>
                <p><?php echo $vrow31; ?></p>                 
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Author Name: </label>  
            </td>
            <td>
                <input type="text" id="txtauthor" name="txtauthor" value="<?php echo $vrow32; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td colspan="2" align=center>
                <button type="submit" >Update</button>
                <button type="reset" onClick="history.back()'">Cancel</button>
            </td>
        </tr>
    </table>
</form>

