<?php
require("include/conn.php");

$vindex2=$_REQUEST['vid'];
$vrow21="";
$vrow22="";
$vrow23="";

$sql = "SELECT * FROM tblbooklist where fldbooknum='$vindex2' order by fldbooknum";
$result = $conn->query($sql);
if($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
        $vrow21=$row['fldtitle'];	
        $vrow22=$row['fldauthor_index'];   
        $vrow23=$row['fldavail_record'];   
    }
}

?>
<form  action="book_update-save.php" method="post" name="formadd" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td colspan="2" align=center>
                <b>Update Book Entry</b>
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Existing Book Number: </label>  
            </td>
            <td>
                <input type="text" id="txtbooknum" name="txtbooknum" value="<?php echo $vindex2; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Title: </label>  
            </td>
            <td>
                <input type="text" id="txttitle" name="txttitle" value="<?php echo $vrow21; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Author Index: </label>  
            </td>
            <td>
                <p><?php echo $vrow22; ?></p>                     
            </td>
        </tr>
        <tr>
            <td>
              <label >Availability Record: </label>  
            </td>
            <td>
                <p><?php echo $vrow23; ?></p>                     
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

