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
						<li class="active"><a href="view_users.php">Détails des utilisateurs</a></li>
						<li><a href="registration.php">Ajout des utilisateurs</a></li>
						<li><a href="FileUpload.php">Ajout des fichiers</a></li>
						</ul></nav>

				</header>

	
				<div class="mainContent">
					
<center><h1>Les informations des utilisateurs</h1></center> 
<font size='6' color='red'>
<?php echo @$_GET['deleted']; ?></font>	
<table width='800' align='center' border='5'>
	<tr>
		<th>User number</th>
		<th>User Name</th>
		<th>User Password</th>
		<th>User Email</th>
		<th>Delete User</th>
	</tr>
	<tr>
<?php	
mysql_connect("localhost","root","");
mysql_select_db("users_db");

		$query = "select * from cpg_users";
		$run = mysql_query($query);
		
	while ($row=mysql_fetch_array($run)){
		$user_id = $row[0];
		$user_name = $row[1];
		$user_pass = $row[2];
		$user_email = $row[3];
	
?>	
<tr align='center'>
	<td><?php echo $user_id; ?></td>
	<td><?php echo $user_name; ?></td>
	<td><?php echo $user_pass; ?></td>
	<td><?php echo $user_email; ?></td>
	<td><a href='delete.php?del=<?php echo $user_id;?>'> Delete</a></td>
	</tr>
	
	<?php } ?>	
</table>			

				</div>
		<h1 align='right' style='margin-right:15px;
margin-top:20px;'><a href='admin_logout.php'>Déconnexion</a></h1>	
	<footer class="mainFooter">
		<p>Copyright &copy 2015 <a href="test1.html">Acceuil</a> | <a href="admin_login.php">Admin</a></p>
		</footer>


		</body>
	</html>