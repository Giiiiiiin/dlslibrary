<?php
require("include/conn.php");

$vstudnum=$_REQUEST['vid'];
$vfirstname="";
$vlastname="";
$vmiddleinit="";

$sql = "SELECT * FROM tblstudent where fldstudnum='$vstudnum' order by fldstudindex ";
$result = $conn->query($sql);
if($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
        $vfirstname=$row['fldfirstname'];	
        $vlastname=$row['fldlastname'];   
        $vmiddleinit=$row['fldmiddleinit'];
    }
}

?>
<form  action="student_update-save.php" method="post" name="formadd" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td colspan="2" align=center>
                <b>Update Borrowing Student Table</b>
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Existing Student Number:</label>  
            </td>
            <td>
                <input type="text" id="txtstudnum" name="txtstudnum" value="<?php echo $vstudnum; ?>"/>                   
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
            <td>
              <label >Enter Last Name:</label>  
            </td>
            <td>
                <input type="text" id="txtlastname" name="txtlastname" value="<?php echo $vlastname; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Middle Name:</label>  
            </td>
            <td>
                <input type="text" id="txtmiddleinit" name="txtmiddleinit" value="<?php echo $vmiddleinit; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td colspan="2" align=center>
                <button type="submit" >Update</button>
                <button type="reset" onClick="history.back()">Cancel</button>
            </td>
        </tr>
    </table>
</form>

