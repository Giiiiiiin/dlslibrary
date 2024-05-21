<?php
require("include/conn.php");

$booknum="";
$title="";
$author_index="";
$author="";
$avail_record="";
$availstat="";
$date_code="";
$return="";

/*
Quick Book Insert
    List of Books (tblbooklist)
        fldbooknum
        fldtitle
        fldauthor_code
        fldavail_record

    List of Authors (tblauthorlist)
        fldauthor_code
        fldbooknum
        fldauthor
    
    List of Availability (tblavailist)
        fldavail_record
        fldbooknum
        fldavailstat
        flddate_code

    Date List (tbldatelist) [Passive?]
        flddate_code
        fldreturn
*/
/*
Quick Borrower Insert
    Master Table (tbllibrarian)
        fldborrower_index
        fldbooknum
        fldstudnum
        fldretri

    Borrowing Student Table (tblstudent)
        fldstudnum
        fldfirstname
        fldlastname
        fldmiddleinit

    Retrieval Log (tblretrilog) [Passive]
        fldretrieval_code
        flddate_code
        fldrecieved

    Date List (tbldatelist) [Passive]
        flddate_code
        fldreturn

    Availability Stat (tblstatus)
        fldavailstat
        fldstatus

*/
?>
<form  action="master_book-save.php" method="post" name="formadd" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td colspan="2" align=center>
                <b>Quick Insert Book Entry</b>
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Book Number (000-00-000): </label>  
            </td>
            <td>
                <input type="text" id="booknum" name="booknum" value="<?php echo $booknum; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Title of Book:</label>  
            </td>
            <td>
                <input type="text" id="title" name="title" value="<?php echo $title; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Author Index of Book (AI000): </label>  
            </td>
            <td>
                <input type="text" id="author_index" name="author_index" value="<?php echo $author_index; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Name of Author: </label>  
            </td>
            <td>
                <input type="text" id="author" name="author" value="<?php echo $author; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Availability Record of Book (AR000): </label>  
            </td>
            <td>
                <input type="text" id="avail_record" name="avail_record" value="<?php echo $avail_record; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Availability Status of Book [A0/A1]: </label>  
            </td>
            <td>
                <input type="text" id="availstat" name="availstat" value="<?php echo $availstat; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter Date Code of Book (D000): </label>  
            </td>
            <td>
                <input type="text" id="date_code" name="date_code" value="<?php echo $date_code; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td>
              <label >Enter the Date the Book will be Available [MM-DD-YYYY]: <br>(Fill in this blank ONLY IF the book status is A0, otherwise leave it blank)</label>  
            </td>
            <td>
                <input type="text" id="return" name="return" value="<?php echo $return; ?>"/>                       
            </td>
        </tr>
        <tr>
            <td colspan="2" align=center>
                <button type="submit" >Save</button>
                <button type="reset" onClick="history.back()">Cancel</button>
            </td>
        </tr>
    </table>
</form>

