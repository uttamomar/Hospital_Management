<?php require('connection.php');?>
<html>
<head>
<title>All Doctors List</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<style>
         table{
             -webkit-box-shadow: 0px 0px 27px 1px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 27px 1px rgba(0,0,0,0.75);
box-shadow: 0px 0px 27px 1px rgba(0,0,0,0.75);
             text-align:center;
            
               }
         table a{
             text-decoration: none;
             color: #ff6c00;
             font-size: 20px;
                }
     
</style>
 </head> 
 <body>
<table class="table table-bordered" align="center">
    <tr bgcolor=#126663><td align=center><font SIZE=6 color=white>HOSPITAL MANAGEMENT SYSTEM</font>
        </td>
    </tr>
<tr>
    <td>
        <table align=center width=750 cellspacing=0 cellpadding=5>
<tr>
    <td align=center>
        <a href=dlist.php>Doctors</td>
    <td align=center>
        <a href=plist.php>Patients</td>
    <td align=center>
        <a href=alist.php>Appointments</td>
</table>
            </td>
    </tr>
<tr bgcolor=#126663><td ><font size=4 color=white>Doctors List</font>
    </td>
    </tr>
<tr>
    <td>
        <a href=dadd.php>Add New Record</a>
    </td>
    </tr>
<tr>
    <td>
        <table width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=#126663><td align=center>S No</td>
    <td align=center>Doctor Name</td>
    <td align=center>Specialization</td>
    <td align=center>Options</td></tr>
<?php


$rs1=mysql_query("SELECT * from doct where dshow='Y' order by dname;");
$sno=1;
while( $row=mysql_fetch_array($rs1)) 
{
 echo "<tr><td>$sno</td><td>$row[1]</td><td>$row[2]</td><td>
 <a href=dmod.php?rno=".$row[0].">Modify</a> | <a
href=ddel.php?rno=".$row[0].">Delete</a></td></tr>";
 $sno++;
 }
if ($sno==1)
    echo "<tr><td align=center><font size=4 color=red>Records Not Found</font></td></tr>";
?>
</table>
    </td>
    </tr>
<tr>
    <td align=center><hr>
    </td>
    </tr>
<tr bgcolor=#126663><td><font size=4 color=white>Deleted Records</font></td></tr>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=#126663>
    <td align=center>S No</td><td align=center>Doctor Name</td>
    <td align=center>Specialization</td>
    <td align=center>Options</td></tr>

    <?php
$rs2=mysql_query("SELECT * from doct where dshow='N' order by dname;");
$sno=1;
while( $row=mysql_fetch_array($rs2)) 
{
 echo "<tr><td>$sno</td><td>$row[1]</td><td>$row[2]</td><td><a
href=dundel.php?rno=".$row[0].">Undelete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
Not Found</font></td></tr>";
?>
</table></td></tr>
</table>
</body>
</html> 