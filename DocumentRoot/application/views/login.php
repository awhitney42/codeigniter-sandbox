<html>
<head>
<title>Login Page</title>
</head>
<body>
<center><font color='red'><?php echo $error_message; ?></font><center>
<form name="loginForm" method="post" action="<?php echo base_url(); ?>auth/user_login_process">
<table width="20%" bgcolor="0099CC" align="center">

<tr>
<td colspan=2><center><font size=4><b>Login Page</b></font></center></td>
</tr>

<tr>
<td>Username:</td>
<td><input type="text" size=25 name="username"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="Password" size=25 name="password"></td>
</tr>

<tr>
<td ><input type="Reset"></td>
<td><input type="submit" onclick="return check(this.form)" value="Login"></td>
</tr>

</table>
</form>
<script language="javascript">
function check(form)
{
//if(form.username.value == "apw" && form.password.value == "apw")
return true;
}
</script>

</body>
</html>