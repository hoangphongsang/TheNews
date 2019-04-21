
<?php 
	include 'Model/DBConfig.php';
	$db = new Database;
	$db ->connect();

	
	if (isset($_GET['controller'])) {
		$controller = $_GET['controller'];
	}
	else{
		$controller = '';
		require_once('Controller/baiviet/index.php');
	
	}
	switch ($controller) {
		case 'baiviet':{
			require_once('Controller/baiviet/index.php');
			break;
		}
	}
 ?>