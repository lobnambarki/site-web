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
						<li><a href="test1.html">Acceuil</a></li>
						<li>
							<a href="#">Raports d'analyses</a>
							<ul>
								<li><a href="Publique.html">Publique</a></li>
								<li  class="active"><a href="login.html">Prive</a></li>
								</ul>
							
							</li>
						<li><a href="google.html">Google Map</a></li>
						<li><a href="contact.html">Contact</a></li>
						</ul></nav>

				</header>

	
				<div class="mainContent">
					<div class="content">
						
						<article class="topcontent">
							<ul>
								<?php 
									$dir =  __DIR__.'/upload';
									$phpfiles = scandir($dir);
									foreach($phpfiles as $phpfile)
									{
										if(basename($phpfile != '.' && basename($phpfile!='..')))
											echo " <li> <a target='_blank' href='upload/" .basename($phpfile)."'>".basename($phpfile)."</a></li>";
									}
								?>
							</ul>
						</article>
						
						
					</div>
				</div>
			
<h1 align='right' style='margin-right:15px;
margin-top:20px;'><a href='logout.php'>Déconnexion</a></h1>
	<footer class="mainFooter">
		<p>Copyright &copy 2015 <a href="test1.html">Acceuil</a> | <a href="admin_login.php">Admin</a></p>
		</footer>


		</body>
	</html>