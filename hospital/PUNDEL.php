<?php require('connection.php');?>
<html>
 <head>
  <title>Recover Doctor</title>
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
<tr bgcolor=#126663>
    <td align=center>
        <font SIZE=6 color=white>HOSPITAL MANAGEMENT SYSTEM</font>
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
<tr bgcolor=#126663><td ><font size=4 color=white>Recover Patient</font></td></tr>
<?php

$rno=$_GET["rno"];
 
 
 mysql_query("update Patient set pshow='Y' where pno='$rno'");
 echo "<tr><td align=center><font size=4 color=green>SuccessfullyRecords Recovered</font></td></tr>";
echo "<tr><td align=center><a href=plist.php>Continue...</a></td></tr>";
echo "</table>";
echo "</body></html>"; 