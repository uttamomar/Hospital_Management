<?php require('connection.php');?>
<html>
 <head>
  
   <title>Modify Patient Profile</title>
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
<?php

$rnooo=trim($_GET["rno"]);

$rs1=mysql_query("SELECT * from patient where pno='".$rnooo."'");
$sno=1;
while( $row=mysql_fetch_array($rs1)) 
{
 echo "<tr bgcolor=red><td ><font size=4 color=white>Edit Patient Details</font></td></tr>";
 echo "<form name=fpmod method=post action=pupdate.php>";
 echo "<tr><td><table width=750 cellspacing=0 cellpadding=5>";
 echo "<tr><td>Doctor Name</td><td><input type=text name=name size=30 maxlength=30 value='".$row[1]."'></td></tr>";
 echo "<tr><td>Address</td><td><input type=text name=addr size=30 maxlength=30  value='".$row[2]."'></td></tr>";
 echo "<tr><td>sex</td><td><input type=text name=sex size=30 maxlength=30  value='".$row[3]."'></td></tr>";
 echo "</table></td></tr>";
 echo "<tr><td colspan=2 align=center><input type=hidden name=rno value=".$rnooo."><input type=submit value=Submit></td></tr>";
 echo "</form>";
 $sno++;
}
if ($sno==1)
    echo "<tr><td align=center><font size=4 color=#126663>Records Not Found</font></td></tr>";
?>
</table>
</body>
</html> 