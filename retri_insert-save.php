<?php
require("include/conn.php");

$vindex8=$_POST['txtretrinum'];
$vrow81=$_POST['txtdatenum'];
$vrow82=$_POST['txtretridate'];

$vindex=0;

$sql = "SELECT * FROM tblretrilog  order by fldretrieval_index";
        $result = $conn->query($sql);
        if($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                
                $vindex=$row['fldretrieval_index'];			
                
            }
        }
        $vindex=$vindex+1;

$sql="INSERT INTO tblretrilog (fldretrieval_index, fldretrieval_code, flddate_code, fldreceived) VALUES ('$vindex', '$vindex8', '$vrow81', '$vrow82')";
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
<meta  http-equiv="refresh" content=".000001;url=file_management.php#retri" />