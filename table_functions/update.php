<?php
require("include/conn.php");

$vborrower=$_REQUEST['vid'];
$vlastname="";
$vfirstname="";

$sql = "SELECT * FROM tblstudent where fldstudno='$vstudno' order by fldindex ";
$result = $conn->query($sql);
if($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
        $vlastname=$row['fldlastname'];	
        $vfirstname=$row['fldfirstname'];   
    }
}

?>
<form  action="update-save.php" method="post" name="formadd" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td colspan="2" align=center>
                <b>Update Student</b>
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
                <button type="submit" >Update</button>
                <button type="reset" onClick="window.location.href='select.php'">Cancel</button>
            </td>
        </tr>
    </table>
</form>

