<?php require('connection.php');?>

<html>
 <head>
  <title>Save Doctor</title>
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
<tr bgcolor=#126663><td ><font size=4 color=white>Save Patient</font>
    </td>
    </tr>
<?php

$name=trim($_POST["name"]);
$sex=trim($_POST["sex"]);
$addr=trim($_POST["addr"]);
$error=0;
if ($name=="") 
{ 
    $error=1; echo "<tr><td><font color=red size=4>Name can't empty</font></td></tr>"; 
}
if ($sex=="") 
{ 
    $error=1; echo "<tr><td><font color=red size=4>Sex can't empty</font></td></tr>";
}
if ($addr=="") 
{ 
    $error=1; 
    echo "<tr><td><font color=redsize=4>Address can't empty</font></td></tr>"; 
}
if ($error==0)
{
 
 mysql_query("insert into patient(pname,paddr,psex,pshow)
values('".$name."','".$addr."','".$sex."','Y')");
 echo "<tr><td align=center><font size=4 color=green>Successfully Records Inserted</font></td></tr>";
}
else {
 echo "<form name=fdadd method=post action=psave.php>";
 echo "<tr><td><table width=750 cellspacing=0 cellpadding=5>";
 echo "<tr><td>Doctor Name</td><td><input type=text name=name size=30 maxlength=30 value='".$name."'></td></tr>";
 echo "<tr><td>Sex</td><td><input type=text name=spec size=30 maxlength=30 value='".$sex."'></td></tr>";
 echo "<tr><td>Sex</td><td><input type=text name=spec size=30 maxlength=30 value='".$addr."'></td></tr>";
 echo "</table></td></tr>";
 echo "<tr><td align=center><input type=submit value=Submit></td></tr>";
 echo "</form>";
}
echo "<tr><td align=center><a href=plist.php>Continue...</a></td></tr>";
echo "</table>";
echo "</body></html>";