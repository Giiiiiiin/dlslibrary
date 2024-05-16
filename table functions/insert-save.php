<?php
require("include/conn.php");

$vstudno=$_POST['txtstudno'];
$vlastname=$_POST['txtlastname'];
$vfirstname=$_POST['txtfirstname'];

$vindex=0;

$sql = "SELECT * FROM tblstudent  order by fldindex";
        $result = $conn->query($sql);
        if($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                
                $vindex=$row['fldindex'];			
                
            }
        }
        $vindex=$vindex+1;

$sql="INSERT INTO tblstudent (fldindex, fldstudno, fldlastname, fldfirstname) VALUES ('$vindex', '$vstudno', '$vlastname', '$vfirstname')";
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
<meta  http-equiv="refresh" content=".000001;url=select.php" />