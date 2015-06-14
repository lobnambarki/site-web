<!doctype html>
<html lang="fr">	
	<head>
		<title>  Centre de recherche | CPG </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Admin Panel</title>
	
		</head>
		<body class="body">
			<header class="mainHeader">
				<img src="img/cpg.jpg">
		
			<div id="clockDisplay" class="clockStyle"  > </div>
<script type="text/javascript" language="javascript" >
		function renderTime()
		{
			var currentTime = new Date();
			var diem = "AM";
			var h = currentTime.getHours();
			var m = currentTime.getMinutes();
			var s = currentTime.getSeconds();
			if(h == 0){
			h=12;}
			else if(h > 12){
				h=h-12;
				diem= "PM";
			}
		if(h < 10){
		h= "0" + h ; 
		}
			if(m < 10){
		m= "0" + m ;
		 }
			if(s < 10){
		s= "0" + s ;
		 }
		var myClock = document.getElementById('clockDisplay');
		myClock.textContent = h + ":" + m + ":" + s + " " + diem;
			myClock.innerText = h + ":" + m + ":" + s + " " + diem;
			setTimeout('renderTime()', 1000);
		}
		renderTime();
		
	
		</script>
	
		
		
	
	
	
				<nav>
					<ul >
						<li ><a href="view_users.php">Détails des utilisateurs</a></li>
						<li><a href="registration.php">Ajout des utilisateurs</a></li>
						<li><a href="FileUpload.php">Ajout des fichiers</a></li>
						</ul></nav>

				</header>

	
				<div class="mainContent">
					

		
	

<form method='post' action='admin_login.php'>
	<table width='400' border='5' align='center'>
		<tr>
			<td align='center' colspan='5'><h1>Admin Login</h1></td>
			
		</tr>
		
		<tr>
			<td align='center'>Admin Name:</td>
			<td><input type='text' name='admin_name' /></td>
		</tr>
		
		<tr>
			<td align='center'>Admin Password:</td>
			<td><input type='password'  name='admin_pass' /></td>
		</tr>
		
		
		
		<tr>
			<td colspan='5' align='center'><input type='submit' name='admin_login' value='Login' /></td>
			
		</tr>
		
	</table>
</form>

	
	<footer class="mainFooter">
		<p>Copyright &copy 2015 <a href="test1.html">Acceuil</a> | <a href="admin_login.php">Admin</a></p>
		</footer>
	</body>
</html>



<?php
mysql_connect("localhost","root","");
mysql_select_db("users_db");
if(isset($_POST['admin_login'])){
	$admin_name=$_POST['admin_name'];
	$admin_pass=$_POST['admin_pass'];
	
	$query = "select * from cpg_admin where admin_name='$admin_name' AND 
	admin_pass='$admin_pass'";
	$run = mysql_query($query);
	if(mysql_num_rows($run)>0){
		echo"<script>window.open('admin_menu.php','_self')</script>";
	}
	else {
		echo"<script>alert('Admin details are incorrects!')</script>";
	}
	
}





?>