<?php

function main(){
	session_start();
//	$_SESSION['current_user']="asdf";

	$base_url = $_SERVER['SERVER_NAME'];

	if(isset($_GET['url'])){
		$url = $_GET['url'];

		$url = filter_var($url, FILTER_SANITIZE_URL);
	
		include('apps/assets/routes.php');
		if(!include($routes[$url])){
			include("apps/controller/404_controller.php");
		}		
	}
	else{
		include('apps/controller/homepage_controller.php');
	}

	
}


main();

?>
