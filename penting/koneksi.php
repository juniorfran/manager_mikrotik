
	<?php 
		 include("routeros_api.php");
		 $API = new routeros_api();
		 if (!$API->connect("192.168.20.1","user","user")){
			 unset($_SESSION["user"]);
			 header("location:login.php");
		 }
	?>