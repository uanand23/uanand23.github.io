<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Karunesh" />

	<title>Login</title>
    <script type="text/javascript">
    function geturl(){
        a=window.location.href;
        return a;
    }
    </script>
</head>

<body>
<hr size="2" color=orange/>
<hr size="2" color=blue/>
<hr size="2" color=green/>
<form method="POST" name="frm">
<h2 align="center">Welcome</h2>
<table border="10" cellpadding="5" cellspacing="0" align="center"width="30%" height="60%" bgcolor="rgba(242,223,239,.8)" >
<tr>
<td><input type="radio" name="signin" value="signup"/><b>Create an account.</b><font size="1">New User?</font>
<br />
<br/>
<form name="Register" method="POST">
<table cellspacing="10" >
<tr><td><input type="text" name="name" placeholder="Name" size="40"/></td></tr>
<tr><td><input type="text" name="mobile" placeholder="Mobile no." size="40"/></td></tr>
<tr><td><input type="email" name="email" placeholder="Email address" size="40"/></td></tr>
<tr><td><input type="password" name="pass" placeholder="Create a password(6+ character)" size="40"  min=6 maxlength="50"/></td></tr>
<tr><td align="center"><input type="submit" name="continue" value="continue"/></td></tr>
</table>
</form>
</td>
</tr>
<tr>
<td ><input type="radio" name="signin" value="login" checked/><b>Login.</b><font size="1"> Already a customer?</font>
<form name="login" method="POST">
<table cellspacing="10">
<tr><td><input type="text" name="u_id" placeholder="Email" size="40"/></td></tr>
<tr><td><input type="password" name="pass" placeholder="Password" size="40"/></td></tr>
<tr><td align="center"><input type="submit" name="login" value="Login"/></td></tr>
</table>
</form>
</td>
</tr>
</table>
</form>
</body>
</html>
<?php


if(isset($_POST['continue']))
{
$link=mysqli_connect("localhost","root","","tradeelecs");
$pss=md5($_POST['pass']);
$qry="insert into Login values('$_POST[name]',$_POST[mobile],'$_POST[email]','$pss')";
$resultset=mysqli_query($link,$qry);
if($resultset)
echo "Register. You can Login Now";
}
if(isset($_POST['login']))
{
    $link=mysqli_connect("localhost","root","","tradeelecs");
$qry="select password from Login where Email='$_POST[u_id]'";

$resultset=mysqli_query($link,$qry);
$r=mysqli_fetch_row($resultset);
$rc= md5($_POST['pass']);
if(strcmp($r[0],$rc)==0)
{session_start();
    $_SESSION['user_id']=$_POST['u_id'];
    //$_SESSION['pass']=$r[0];
    if(strcmp($r[0],md5("iamadmin"))==0)
     header("location:adminlogin.php");
    else
    {
         $r12="$_SERVER[REQUEST_URI]";
            $r12=strstr($r12,'=');
            $r12=ltrim($r12,'=');
            
    
       header("location:$r12");
    }
    
    
   
}
}


?>