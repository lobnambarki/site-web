<?php
mysql_connect("localhost","root","");
mysql_select_db("users_db");
	if(isset($_POST['login'])) {
		$password = $_POST['pass'];
		$nom = $_POST['nom'];
		
		
		$check_user="select * from cpg_users where user_pass='$password' AND user_name
		='$nom'";
		$run = mysql_query($check_user);
		if(mysql_num_rows($run)>0){
			echo"<script>window.open('welcome_login.php','_self')</script>";
		}
		else{
			echo"<script>alert('Nom ou mot de passe est incorrect!')</script>";
		}
		}
		
	
	
	


?>