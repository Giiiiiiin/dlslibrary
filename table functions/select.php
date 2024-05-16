<?php
require("include/conn.php");
?>
<table border="1">
    <tr>
    <td align=center colspan="5">
        <b>Select Records</b>
        </td>
    </tr>
<?php
$sql = "SELECT * FROM tblstudent order by fldindex ";
        $result = $conn->query($sql);
        if($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                
                $vstudno=$row['fldstudno'];			
                $vlastname=$row['fldlastname'];	
                $vfirstname=$row['fldfirstname'];
                
    ?>
                <tr>
                    <td>
                        <?php
                        echo $vstudno;
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $row['fldlastname'];	
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $row['fldfirstname'];	
                        ?>
                    </td>
                    
                    <td>
                        <button type="button" onClick="window.location.href='update.php?vid=<?php echo $vstudno; ?>'">Edit</button>
                    </td>
                    
                    <td>
                        <button type="button" onClick="window.location.href='delete.php?vid=<?php echo $vstudno; ?>'">Delete</button>
                    </td>
                
                </tr>
               <?php 
            }
        }

?>
    <tr>
        <td colspan="5" align=center>
            <button type="button" onClick="window.location.href='insert.php'">Insert</button>
            <button type="reset" onClick="window.location.href='index.php'">Cancel</button>
        </td>
    </tr>
<table>