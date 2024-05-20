<?php
require("include/conn.php");

$vbooknum=$_POST['txtbooknum'];
$vtitle=$_POST['txttitle'];
$vauthorindex=$_POST['txtauthor'];
$vavailrecord=$_POST['txtavail'];

$vindex=0;

$sql = "SELECT * FROM tblbooklist  order by fldbooknum";
        $result = $conn->query($sql);
        if($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                
                $vindex=$row['fldbooknum'];			
                
            }
        }
        $vindex=$vindex+1;

$sql="INSERT INTO tblbooklist (fldbooknum, fldtitle, fldauthor_index, fldavail_record) VALUES ('$vbooknum', '$vtitle', '$vauthorindex', '$vavailrecord')";
if ($conn->query($sql) === TRUE) 
{
} 
else 
{            
} 

?>
<script>
    alert("Record Saved.");								
</script>
<meta  http-equiv="refresh" content=".000001;url=file_management.php#listBooks" />