<?php require('connection.php');?>
<html>
 <head>
  <title>Add Appointments</title>
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
<tr bgcolor=#126663><td align=center>
    <font SIZE=6 color=white>HOSPITAL MANAGEMENT SYSTEM</font></td></tr>
<tr><td><table align=center width=750 cellspacing=0 cellpadding=5>
<tr><td align=center><a href=dlist.php>Doctors</td><td align=center>
    <a href=plist.php>Patients</td><td align=center>
    <a href=alist.php>Appointments</td>
</table></td></tr>
<tr bgcolor=#126663><td ><font size=4 color=white>Add Appointments</font></td></tr>
<form name=fdadd method=post action=asave.php>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr><td>Patient Id</td><td><select name=pat style="width:230px">
<?php


$rs1=mysql_query("SELECT * from patient where pshow='Y' order by pname;");
$sno=1;
?>

    <option selected="selected" disabled="disabled">Patient Id</option>

    <?php
     while( $row=mysql_fetch_array($rs1)) 
     {
 $patient_id=$row[0];
 $patient=$row[1];
 ?>
	<option value="<?php echo $patient_id ?>"><?php echo $patient_id."  :  ".$patient ?></option>
 <?php
 $sno++;
}
?>
</select>
</td></tr>
<tr><td>Doctor Id</td><td><select name=doc style="width:230px">
<option selected="selected" disabled="disabled">Doctor Id</option>
<?php

$rs2=mysql_query("SELECT * from doct where dshow='Y' order by
dname;");
$sno=1;
while($row1=mysql_fetch_array($rs2)) {
 $doctor_id=$row1[0];
 $doctor=$row1[1];
 ?>
	<option value="<?php echo $doctor_id ?>"><?php echo $doctor_id."  :  ".$doctor ?></option>
 <?php
 $sno++;
}
?>
</select>
</td></tr>
<tr><td>Time</td><td><input type=text name=tim placeholder="hh:mm" size=30 maxlength=30></td></tr>
<tr><td>Date</td><td><input type=text name=dat placeholder="yy/dd/mm" size=30 maxlength=30></td></tr>
</table></td></tr>
<tr><td align=center><input type=submit value=Submit></td></tr>
</form>
</table>
</body>
</html>