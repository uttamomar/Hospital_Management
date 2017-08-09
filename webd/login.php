<?php
session_start();
error_reporting(1);
if(!mysql_connect("localhost","root",""))
 {
  echo "<tr><td><font color=red size=4>Connection
Error</font></td></tr>";
  die();
 }
 mysql_connect("localhost","root","");
 mysql_select_db("hospital");
 
 extract($_POST);
 if(isset($signIn))
 {
	//echo $user,$pass;
	//for Admin
	$que=mysql_query("select user,pass from admin where user='$user' and pass='$pass'");
	 $row= mysql_num_rows($que);
	 if($row)
	 {
		$_SESSION['admin']=$user;
         
		echo "<script>window.location='index.php'</script>";
		
		//include('alist.php');
	 	
	 }
	 else
	 {
	  $err="<span class='glyphicon glyphicon-exclamation-sign' style='color:red'></span> <font color='red'>Invalid admin Login</font>";
         
	 }
	
 
 }
if($_SESSION['admin']!="")
{
header('index.php');
}
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
   
   
    <title>Hospital Management System</title>
      <link rel="stylesheet" href="css/style.css" type="text/css">

         <style>
             html {
background: url(images/b.jpg) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
             body{
/*               background:  #2f97ff;*/
             }
         table{
             background: #126663;
             margin-top:30vh;
             width:400px;
             height: 300px;
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
  </head>

  <body>



    <div class="container" style="position:fixed; margin-left:30vw;">
	
      <form method="post" class="form-signin">
       <table align="center">
           <tr>
               <td>
        <h2 class="form-signin-heading">Please sign in</h2>
                   </td>
            </tr>
           <tr>
        <label><?php echo $err; ?></label>
               </tr>
           <tr>
            <td>
		<label for="inputEmail" class="sr-only">Email address</label>
                </td>
               <td>
        <input type="email" id="inputEmail" name="user" class="form-control" placeholder="admin@gmail.com" required autofocus>
                </td>
        </tr>
           <tr>
               <td>
        <label for="inputPassword" class="sr-only">Password</label>
                   </td>
           <td>
        <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="admin" required>
               </td>
            </tr>
        <tr>
            <td>
<button class="btn btn-lg btn-primary btn-block" name="signIn" type="submit">Sign in</button>
                </td>
            </tr>
           </table>
      </form>

    </div> <!-- /container -->

  </body>
</html>