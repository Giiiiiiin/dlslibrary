<?php
require("include/conn.php");

$vindex6=$_POST['txtdatecode'];
$vrow61=$_POST['txtdate'];

$vindex=0;

$sql = "SELECT * FROM tbldatelist  order by flddate_index";
        $result = $conn->query($sql);
        if($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                
                $vindex=$row['flddate_index'];			
                
            }
        }
        $vindex=$vindex+1;

$sql="INSERT INTO tbldatelist (flddate_index, flddate_code, fldreturn) VALUES ('$vindex', '$vindex6', '$vrow61')";
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
<meta  http-equiv="refresh" content=".000001;url=file_management.php#listDates" />