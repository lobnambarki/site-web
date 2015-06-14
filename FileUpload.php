<?php
	if(isset($_FILES['UploadFileField'])){
		// Creates the Variables needed to upload the file
		$UploadName = $_FILES['UploadFileField']['name'];
		$UploadName = mt_rand(100000, 999999).$UploadName;
		$UploadTmp = $_FILES['UploadFileField']['tmp_name'];
		$UploadType = $_FILES['UploadFileField']['type'];
		$FileSize = $_FILES['UploadFileField']['size'];
		
		// Removes Unwanted Spaces and characters from the files names of the files being uploaded
		$UploadName = preg_replace("#[^a-z0-9.]#i", "", $UploadName);
		// Upload File Size Limit 
		if(($FileSize > 125000000)){
			
			die("Error - File too Big");
			
		}
		// Checks a File has been Selected and Uploads them into a Directory on your Server
		if(!$UploadTmp){
			die("No File Selected, Please Upload Again");
		}else{
			move_uploaded_file($UploadTmp, "upload/$UploadName");
		}
	}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>  Centre de recherche | CPG </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>File Upload</title>
</head>

<body>
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
						<li><a href="registration.php">Ajout des utilisateurs</a></li>
						<li class="active"><a href="FileUpload.php">Ajout des fichiers</a></li>
						</ul></nav>

				</header>

	
				

		
	

<div class="fileuploadholder">
  <form action="FileUpload.php" method="post" enctype="multipart/form-data" name="FileUploadForm" id="FileUploadForm">
    <label for="UploadFileField"></label>
    <input type="file" name="UploadFileField" id="UploadFileField" />
    <input type="submit" name="UploadButton" id="UploadButton" value="Upload" />
  </form>
</div>

	
	<footer class="mainFooter">
		<p>Copyright &copy 2015 <a href="test1.html">Acceuil</a> | <a href="admin_login.php">Admin</a></p>
		</footer>




</body>
</html>