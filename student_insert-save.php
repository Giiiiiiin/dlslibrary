<?php
require("include/conn.php");

$vindex7=$_POST['txtstudno']; 
$vrow71=$_POST['txtfirstname'];  
$vrow72=$_POST['txtlastname'];   
$vrow73=$_POST['txtmidinit'];  

$vindex=0;

$sql = "SELECT * FROM tblstudent  order by fldstudindex";
        $result = $conn->query($sql);
        if($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                
                $vindex=$row['fldstudindex'];			
                
            }
        }
        $vindex=$vindex+1;

$sql="INSERT INTO tblstudent (fldstudindex, fldstudnum, fldfirstname, fldlastname, fldmiddleinit) VALUES ('$vindex', '$vindex7', '$vrow71', '$vrow72', '$vrow73')";
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
<meta  http-equiv="refresh" content=".000001;url=file_management.php#student" />