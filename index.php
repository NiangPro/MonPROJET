<?php 
	
	session_start();
					
	include('init.php');

	funtion somme($a, $b){
		return $a+$b;
	}
	
	require_once('views/index.view.php');
 ?>
