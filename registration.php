<!doctype html>
<html lang="fr">	
	<head>
		<title>  Centre de recherche | CPG </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
						<li ><a href="admin_menu.php">Détails des utilisateurs</a></li>
						<li class="active"><a href="registration.php">Ajout des utilisateurs</a></li>
						<li><a href="FileUpload.php">Ajout des fichiers</a></li>
						</ul></nav>

				</header>

	
				<div class="mainContent">
<form method='post' action='registration.php'>
	<table width='400' border='5' align='center'>
		<tr>
			<td align='center' colspan='5'><h1>Formulaire d'enregistrement </h1></td>
			
		</tr>
		<tr>
			<td align='center'>Nom d'utilisateur:</td>
			<td><input type='text' name='name' /></td>
		</tr>
		
		<tr>
			<td align='center'>Mot de passe d'utlisateur:</td>
			<td><input type='password'  name='pass' /></td>
		</tr>
		
		<tr>
			<td align='center'>Email d'utilisateur:</td>
			<td><input type='text' name='email' /></td>
		</tr>
		
		<tr>
			<td colspan='5' align='center'><input type='submit' name='submit' value='Sign Up' /></td>
			
		</tr>
		
	</table>
</form>

	
			</div>
			<h1 align='right' style='margin-right:15px;
margin-top:20px;'><a href='admin_logout.php'>Déconnexion</a></h1>
	<footer class="mainFooter">
		<p>Copyright &copy 2015 <a href="test1.html">Acceuil</a> | <a href="admin_login.php">Admin</a></p>
		</footer>


		</body>
	</html>



<?php
mysql_connect("localhost","root","");
mysql_select_db("users_db");
	if(isset($_POST['submit'])) {
		$user_name = $_POST['name'];
		$user_pass = $_POST['pass'];
	$user_email = $_POST['email'];
		if($user_name=='') {
			echo"<script>alert(' Enter votre nom SVP!')</script>";
			exit();
			}
			if($user_pass=='') {
			echo"<script>alert(' Enter votre mot de passe SVP!')</script>";
			exit();
			}
			if($user_email=='') {
			echo"<script>alert(' Enter votre addresse mail SVP!')</script>";
			exit();
			}
		
		$check_email="select * from cpg_users where user_email='$user_email'";
		$run = mysql_query($check_email);
		if(mysql_num_rows($run)>0){
			echo"<script>alert('Email $user_email is already exist in database, plz try another one!')</script>";
		exit();
		}
		$query="insert into cpg_users (user_name,user_pass,user_email) values ('$user_name','$user_pass','$user_email')";
	if(mysql_query($query)){
		echo"<script>alert('Registration Successful')</script>";
	}
	}
	


?>