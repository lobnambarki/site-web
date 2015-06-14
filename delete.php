<?php
mysql_connect("localhost","root","");
mysql_select_db("users_db");

$delete_id = $_GET['del'];
$query = "delete from cpg_users where id='$delete_id'";
if(mysql_query($query)){
		echo"<script>window.open('admin_menu.php','_self')</script>";
}


?>